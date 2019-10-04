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

  <header>
    <?php
    include("nav.php")
    ?>
  </header>

  <h1 class="display-4">Shopping Cart</h1>
  <p class="lead">All Products</p>


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
        <td><a href="?add=<?php echo ($i); ?>"><button type="button" class="btn-sm btn-success">Add</button></a></td>
      </tr>
    <?php
    }
    ?>
  </table>
  <a href="order.php"><button type="button" class="btn-sm btn-primary" onclick="toast()">Order Cart</button></a>
  <div id="snackbar">Item has been added to your cart</div>
  <footer class="col-md-12">

  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="/scripts/toast.js"></script>
</body>

</html>