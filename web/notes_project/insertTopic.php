<?php

// get the data from the POST
$title = $_POST['txtTitle'];
$content = $_POST['txtContent'];
$chkCategoriesIds = $_POST['chkCategories'];

// For debugging purposes, you might include some echo statements like this
// and then not automatically redirect until you have everything working.

// echo "book=$book\n";
// echo "chapter=$chapter\n";
// echo "verse=$verse\n";
// echo "content=$content\n";

// we could (and should!) put additional checks here to verify that all this data is actually provided


require("dbConnect.php");
$db = get_db();

try {
	// Add the Scripture

	// We do this by preparing the query with placeholder values
	$query = 'INSERT INTO note(title, content) VALUES(:title, :content)';
	$statement = $db->prepare($query);

	// Now we bind the values to the placeholders. This does some nice things
	// including sanitizing the input with regard to sql commands.
	$statement->bindValue(':title', $title);
	$statement->bindValue(':content', $content);

	$statement->execute();

	// get the new id
	$noteId = $db->lastInsertId("note_id_seq");

	// Now go through each topic id in the list from the user's checkboxes
	foreach ($chkCategoryIds as $chkCategoryId) {
		echo "noteId: $noteId, categoryId: $categoryId";

		// Again, first prepare the statement
		$statement = $db->prepare('INSERT INTO note_category(noteId, categoryId) VALUES(:noteId, :categoryId)');

		// Then, bind the values
		$statement->bindValue(':noteId', $noteId);
		$statement->bindValue(':categoryId', $categoryId);

		$statement->execute();
	}
} catch (Exception $ex) {
	// Please be aware that you don't want to output the Exception message in
	// a production environment
	echo "Error with DB. Details: $ex";
	die();
}

// finally, redirect them to a new page to actually show the topics
header("Location: showTopics.php");

die();
