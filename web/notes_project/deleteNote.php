<?php

// get the data from the POST
$id = $_GET['id'];

var_dump($id);



// echo "title=$title\n";
// echo "content=$content\n";

require("./library/dbConnect.php");
$db = get_db();

try {

    // We do this by preparing the query with placeholder values
    $query = 'SELECT FROM note WHERE id = :id';
    $statement = $db->prepare($query);



    // Now we bind the values to the placeholders. This does some nice things
    // including sanitizing the input with regard to sql commands.
    $statement->bindValue(':id', $id);

    $statement->execute();

    $rowsChanged = $statement->rowCount();

    var_dump($statement);
    exit;

    $statement->closeCursor();
} catch (Exception $ex) {
    // Please be aware that you don't want to output the Exception message in
    // a production environment
    echo "Error with DB. Details: $ex";
    die();
}

// finally, redirect them to a new page to actually show the topics
header("Location: showNotes.php");

die();
