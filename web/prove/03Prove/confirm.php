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
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">CS 313</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a>
					</li>
					<li><a href="shopping.php">Shopping Cart</a>
					</li>
					<li>
						<a href="order.php">Order Form</a>
					</li>
					<li>
						<a href="checkout.php">Check Out</a>
					</li>
					<li>
						<a href="confirm.php">Payment</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a>
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