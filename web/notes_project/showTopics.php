<?php

require("dbConnect.php");
$db = get_db();

?>
<!DOCTYPE html>
<html>

<head>
	<title>Notes</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>

<body>
	<div>

		<div class="container-fluid p-5">
			<div class="text-center">
				<h1 class="display-3">Notes</h1>
			</div>
			<div class="c_date">
				<h2>Today's Date</h2>
				<h3><?php
					$date = new DateTime("now", new DateTimeZone('America/Boise'));
					echo $date->format('l, M d, Y h:i A');
					?>
				</h3>
			</div>

			<?php


			try {
				// prepare the statement
				$statement = $db->prepare('SELECT id, title, content FROM note');
				$statement->execute();

				// Go through each result
				while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
					echo '<p>' . $row['title'] . ' ' . $row['content'];
					echo '<br />';
					echo 'Category: ';

					// get the topics now for this scripture
					$stmtTopics = $db->prepare('SELECT name FROM category c'
						. ' INNER JOIN note_category nc ON nc.categoryId = c.id'
						. ' WHERE nc.noteId = :noteId');

					$stmtTopics->bindValue(':noteId', $row['id']);
					$stmtTopics->execute();

					// Go through each topic in the result
					while ($categoryRow = $stmtCategory->fetch(PDO::FETCH_ASSOC)) {
						echo $categoryRow['name'] . ' ';
					}

					echo '</p>';
				}
			} catch (PDOException $ex) {
				echo "Error with DB. Details: $ex";
				die();
			}
			?>
			<button><a href="./topicEntry.php">Insert New</a></button>
		</div>

</body>

</html>