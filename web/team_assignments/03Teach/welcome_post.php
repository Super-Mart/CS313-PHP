<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result</title>
</head>

    <?php 

    $name = $_POST["name"];
    $email = $_POST["email"];
    $major = $_POST["major"];
    $comments = $_POST["comments"];

    echo "<p>Hi, ". $name . "</p><br>";
    echo "<a href='mailto:" . $email . "'>Your Email</a><br>";
    echo "Your major is: ". $major ."<br>";
    echo "Your posted comment: ". $comments ."<br>";

    
    ?>

</body>
</html>