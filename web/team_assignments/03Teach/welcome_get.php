<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p> Welcome <?php echo $_GET["name"]; ?></p> <br>
    <p> Your email address is: <a href="mailto:<?php echo $_GET["email"]; ?>"><?php echo $_GET["email"]; ?></p>
    <p> Your Major is: <?php echo $_GET["major"]; ?> </p>
    <p> Your Comment: <?php echo $_GET["comments"]; ?> </p>
</body>
</html>