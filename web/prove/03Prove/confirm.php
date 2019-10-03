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
		<header>
			<nav>
				<ul class="nav nav-pills nav-fill">
					<li class="nav-item">
						<a class="nav-link" href="shopping.php">Active</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="order.php">Much longer nav link</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="checkout.php">Link</a>
					</li>
				</ul>
			</nav>
		</header>
	</header>

	<h1>Thanks for Paying</h1>
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
	<footer>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
	</footer>
</body>

</html>