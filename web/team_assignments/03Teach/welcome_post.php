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
    echo "<p>Your Email is: <a href='mailto:" . $email . "'>". $email . "</a></p>";
    echo "<p>Your major will be in: " . $major;
    // foreach ($major as $majors){
    //     echo $majors. "</p>";
    // }   
    echo "<p>Your posted comment: ". $comments ."</p>";
    echo "<p>Places you have visited: </p>";
     foreach ($visted as $visit){
        echo $visit . ", ";
    }    
    ?>

</body>
</html>