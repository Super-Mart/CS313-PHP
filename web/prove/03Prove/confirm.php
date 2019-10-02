<?php

require 'start.php'
?>
<!DOCTYPE html>
<html>

<head>
	<title>Shopping Cart</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
	<nav>
		<div>
			<div>
				<li>
					<a href="shopping.php">Home</a>
				</li>
				</ul>
			</div>
		</div>
	</nav>
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