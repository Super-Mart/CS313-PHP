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
$name = $_POST["name"];
$email = $_POST["email"];

echo "Your name is ". $name . " and you are ". $email . " years old".

?>
    <p> Welcome <?php echo $_POST["name"]; ?></p>
    <p> Your email address is:<?php echo $_POST["email"]; ?></p>
    <p> Your Major is: <?php echo $_POST["major"]; ?> </p>
    <p> Your Comment: <?php echo $_POST["comments"]; ?> </p>
</body>
</html>