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
				<li>
					<a href="order.php">View Order</a>
				</li>
				<li>
					<a href="confirm.php">View Order</a>
				</li>
				</ul>
			</div>
		</div>
	</nav>
	<div id="shoppingBanner" class="jumbotron">
		<h1>Thanks for Paying</h1>
	</div>
	<?php
	if (isset($_SESSION["cart"])) {
		?>


		<?php
			$total = 0;
			foreach ($_SESSION["cart"] as $i) {
				?>

		<?php
				$total = $total + $_SESSION["amounts"][$i];
			}
			$_SESSION["total"] = $total;
			?>

		<h1>Total : <?php echo ($total); ?></h1>
		</td>


	<?php
	}
	?>





	<footer class="col-md-12">
		Copyright 2017
	</footer>
</body>

</html>