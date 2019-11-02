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
    $nc_query = 'DELETE FROM note_category WHERE noteid = :id';
    $statement = $db->prepare($query);


    $statement->bindValue(':id', $id);

    $statement->execute();

    $rowsChanged = $statement->rowCount();
    var_dump($statement);
    $statement->closeCursor();



    $n_query = 'DELETE FROM note WHERE id = :id';
    $statement = $db->prepare($query);


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
