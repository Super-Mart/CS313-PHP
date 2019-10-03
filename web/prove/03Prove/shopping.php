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
  <title>Shopping Cart</title>
</head>

<body class="container">

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
          <a href="checkout.php">Go To Checkout</a>
        </li>
        </ul>
      </div>
    </div>
  </nav>

  <h1>Shopping Cart</h1>

  <h2>All Products</h2>
  <table>
    <tr>
      <th>Product</th>
      <th width="10px">&nbsp;</th>
      <th>Amount</th>
      <th width="10px">&nbsp;</th>
      <th>Action</th>
    </tr>

    <?php
    for ($i = 0; $i < count($products); $i++) {
      ?>
      <tr>
        <td><?php echo ($products[$i]); ?></td>
        <td width="10px">&nbsp;</td>
        <td><?php echo ($amounts[$i]); ?></td>
        <td width="10px">&nbsp;</td>
        <td><a href="?add=<?php echo ($i); ?>"><button type="button" class="btn-sm btn-warning">Add</button></a></td>
      </tr>
    <?php
    }
    ?>
  </table>
  <a href="order.php"><button type="button" class="btn-sm btn-primary">Order Cart</button></a>
  <p></p>
  <footer>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
  </footer>
</body>

</html>