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
        </ul>
      </div>
    </div>
  </nav>
  <div>
    <h1>Shopping Cart</h1>
  </div>
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

    <?php
    $cards = array("samsungs10", "samsungs10", "samsungs10", "samsungs10", "samsungs10", "samsungs10");
    foreach ($cards as $card) {
      echo "<img src='./images/$card.jpg'> <br>";
    } ?>
  </table>


  <a href="order.php"><button type="button" class="btn-sm btn-primary">Order Cart</button></a>
  <p></p>
  <footer>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
  </footer>
</body>

</html>