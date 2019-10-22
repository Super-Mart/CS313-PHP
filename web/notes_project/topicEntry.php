<?php

// The DB connection logic is in another file so it can be included
// in each of our different PHP files.
require("dbConnect.php");
$db = get_db();

?>
<!DOCTYPE html>
<html>

<head>
	<title>New Entry</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div>

		<h1>New Note</h1>

		<form id="mainForm" action="insertTopic.php" method="POST">

			<input type="text" id="txtTitle" name="txtTitle" />
			<label for="txtTitle">Title</label>
			<br /><br />

			<label for="txtContent">Content:</label><br />
			<textarea id="txtContent" name="txtContent" rows="4" cols="50"></textarea>
			<br /><br />

			<label>Categories:</label><br />

			<?php

			try {

				// prepare the statement
				$statement = $db->prepare('SELECT id, name FROM category');
				$statement->execute();

				// Go through each result
				while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
					$id = $row['id'];
					$name = $row['name'];

					// Notice that we want the value of the checkbox to be the id of the label
					echo "<input type='checkbox' name='chkCategories[]' id='chkCategories$id' value='$id'>";

					// Also, so they can click on the label, and have it select the checkbox,
					// we need to use a label tag, and have it point to the id of the input element.
					// The trick here is that we need a unique id for each one. In this case,
					// we use "chkTopics" followed by the id, so that it becomes something like
					// "chkTopics1" and "chkTopics2", etc.
					echo "<label for='chkCategories$id'>$name</label><br />";

					// put a newline out there just to make our "view source" experience better
					echo "\n";
				}
			} catch (PDOException $ex) {
				// Please be aware that you don't want to output the Exception message in
				// a production environment
				echo "Error connecting to DB. Details: $ex";
				die();
			}

			?>

			<br />

			<input type="submit" value="Add to Database" />

		</form>


	</div>

</body>

</html>