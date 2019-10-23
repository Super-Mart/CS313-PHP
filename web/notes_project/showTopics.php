<?php
require("dbConnect.php");
$db = get_db();
?>
<!DOCTYPE html>
<html>

<head>
	<link href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada:400,700|Montserrat:400,600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/styles.css">
	<title>Notes</title>
</head>

<body>
	<nav class="navbar navbar-dark bg-primary pl-5 pr-5">
		<a class="navbar-brand" href="./index.php">Notes</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse text-center" id="navbarColor01">
			<?php
			include('./common/nav.php');
			?>
		</div>
	</nav>
	<div>

		<div class="container-fluid p-5">

			<?php
			include('./common/header.php');
			?>

			<?php
			try {
				// prepare the statement
				$statement = $db->prepare('SELECT * FROM note');
				$statement->execute();

				// Go through each result
				while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

					echo '<p>' . $row['title'] . ' ' . $row['content'];
					echo '<br />';
					echo 'Category: ';

					// get the topics now for this scripture
					$stmtCategory = $db->prepare('SELECT name FROM category c'
						. ' INNER JOIN note_category nc ON nc.categoryId = c.id'
						. ' WHERE nc.noteId = :noteId');

					$stmtCategory->bindValue(':noteId', $row['id']);
					$stmtCategory->execute();

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
		</div>
	</div>
</body>

</html>