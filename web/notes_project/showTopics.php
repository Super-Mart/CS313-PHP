<?php
include("./library/functions.php");
?>
<!DOCTYPE html>
<html>

<head>
	<?php
	include('./common/head.php');
	?>
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

			<table class="table table-hover">
				<thead>
					<tr>
						<th scope="col">Note Title</th>
						<th scope="col">Note Description</th>
						<th scope="col">Category</th>
					</tr>
				</thead>
				<tbody>
					<?php load_notes();
					// try {
					// 	// prepare the statement
					// 	$statement = $db->prepare('SELECT * FROM note');
					// 	$statement->execute();

					// 	// Go through each result
					// 	while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

					// 		echo '<p>' . $row['title'] . ' ' . $row['content'];
					// 		echo '<br />';
					// 		echo 'Category: '; 

					// 		// get the topics now for this scripture
					// 		$stmtCategory = $db->prepare('SELECT name FROM category c'
					// 			. ' INNER JOIN note_category nc ON nc.categoryId = c.id'
					// 			. ' WHERE nc.noteId = :noteId');

					// 		$stmtCategory->bindValue(':noteId', $row['id']);
					// 		$stmtCategory->execute();

					// 		// Go through each topic in the result
					// 		while ($categoryRow = $stmtCategory->fetch(PDO::FETCH_ASSOC)) {
					// 			echo $categoryRow['name'] . ' ';
					// 		}

					// 		echo '</p>';
					// 	}
					// } catch (PDOException $ex) {
					// 	echo "Error with DB. Details: $ex";
					// 	die();
					// }
					?>
				</tbody>

				</tbody>
			</table>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" i ntegrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>