<?php

// get the data from the POST
$name = $_POST['txtCategory'];

// echo "title=$title\n";
// echo "content=$content\n";

require("./library/dbConnect.php");
$db = get_db();

try {

    // We do this by preparing the query with placeholder values
    $query = 'INSERT INTO category("name") VALUES(:name)';
    $statement = $db->prepare($query);

    // Now we bind the values to the placeholders. This does some nice things
    // including sanitizing the input with regard to sql commands.
    $statement->bindValue(':name', $name);

    $statement->execute();
} catch (Exception $ex) {
    // Please be aware that you don't want to output the Exception message in
    // a production environment
    echo "Error with DB. Details: $ex";
    die();
}

// finally, redirect them to a new page to actually show the topics
header("Location: showNotes.php");

die();
