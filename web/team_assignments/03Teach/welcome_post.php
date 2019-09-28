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
    $visted = $_POST["visted"];
   
    echo "<p>Hi, ". $name . "</p>";
    echo "<a href='mailto:" . $email . "'>Your Email</a><br>";
    echo "<p>Your major is: ". $major ."</p><br>";
    echo "<p>Your posted comment: ". $comments ."</p><br>";
    echo "<p>Places you have visited: </p><br>"
     foreach ($visted as $visit){
        echo $visit . "<br>";
    }    
    ?>

</body>
</html>