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

	<h1>Check Out Page</h1>

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