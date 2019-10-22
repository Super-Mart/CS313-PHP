<?php

// get the data from the POST
$notesTitle = $_POST['notesTitle'];
$notesContent = $_POST['notesContent'];
$notesCategoryIds = $_POST['notesCategory'];

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
    $query = 'INSERT INTO notes (notesTitle, notesContent) VALUES(:notesTitle, :notesContent)';
    $statement = $db->prepare($query);

    // Now we bind the values to the placeholders. This does some nice things
    // including sanitizing the input with regard to sql commands.
    $statement->bindValue(':notesTitle', $notesTitle);
    $statement->bindValue(':notesContent', $notesContent);;

    $statement->execute();

    // get the new id
    $notesId = $db->lastInsertId("notes_notesId_seq");

    // Now go through each topic id in the list from the user's checkboxes
    foreach ($notesCategoryIds as $notesCategoryId) {
        echo "NotesId: $notesId, notesCategoryId: $notesCategoryId";

        // Again, first prepare the statement
        $statement = $db->prepare('INSERT INTO notes_notesCategory(notesId, notesCategoryId) VALUES(:notesId, :notesCategoryId)');

        // Then, bind the values
        $statement->bindValue(':notesId', $notesId);
        $statement->bindValue(':notesCategoryId', $notesCategoryId);

        $statement->execute();
    }
} catch (Exception $ex) {
    // Please be aware that you don't want to output the Exception message in
    // a production environment
    echo "Error with DB. Details: $ex";
    die();
}

// finally, redirect them to a new page to actually show the topics
header("Location: showNotes.php");

die();
