<?php

require 'start.php'
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<title>Confirmation</title>
</head>

<body class="container">

	<header>
		<?php
		include("nav.php")
		?>
	</header>


	<h1 class="display-4">Thanks for Paying</h1>

	<?php
	if (isset($_SESSION["cart"])) {
		$total = 0;
		foreach ($_SESSION["cart"] as $i) {
			$total = $total + $_SESSION["amounts"][$i];
		}
		$_SESSION["total"] = $total;
		echo "<h1>Total: " . $total . "</h1>";
	}
	?>
	<footer class="col-md-12">

	</footer>
</body>

</html>