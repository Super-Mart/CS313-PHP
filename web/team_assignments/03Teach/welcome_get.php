<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result</title>
</head>
<body>
<?php

// name attribute of the input field goes inside the 
// square brackets of $_GET superglobal
$name = $_GET["name"];
$email = $_GET["email"];

echo "Your name is ". $name . " and you are ". $email . " years old".

?>
    <p> Welcome <?php echo $_GET["name"]; ?></p>
    <p> Your email address is:<?php echo $_GET["email"]; ?></p>
    <p> Your Major is: <?php echo $_GET["major"]; ?> </p>
    <p> Your Comment: <?php echo $_GET["comments"]; ?> </p>
</body>
</html>