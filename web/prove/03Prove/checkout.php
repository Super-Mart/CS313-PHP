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
	<title>Checkout</title>
</head>

<body class="container">

	<header>
		<?php
		include("nav.php")
		?>
	</header>

	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Check Out</h1>
			<p class="lead">page</p>
		</div>
	</div>

	<?php
	if (isset($_SESSION["cart"])) {
		?>
		<table>
			<tr>
				<th>Product</th>
				<th width="10px">&nbsp;</th>
				<th>Qty</th>
				<th width="10px">&nbsp;</th>
				<th>Amount</th>
				<th width="10px">&nbsp;</th>
			</tr>
			<?php
				$total = 0;
				foreach ($_SESSION["cart"] as $i) {
					?>
				<tr>
					<td><?php echo ($products[$_SESSION["cart"][$i]]); ?></td>
					<td width="10px">&nbsp;</td>
					<td><?php echo ($_SESSION["qty"][$i]); ?></td>
					<td width="10px">&nbsp;</td>
					<td><?php echo ($_SESSION["amounts"][$i]); ?></td>
					<td width="10px">&nbsp;</td>

				</tr>
			<?php
					$total = $total + $_SESSION["amounts"][$i];
				}
				$_SESSION["total"] = $total;
				?>
			<tr>
				<td colspan="7">Total : <?php echo ($total); ?></td>
			</tr>
		</table>
	<?php
	}
	?>
	<table>
		<tr>
			<td colspan="5"><a href="confirm.php"><button type="button" class="btn-sm btn-danger">Pay</button></a></td>
		</tr>
	</table>

	<footer>

	</footer>
</body>

</html>