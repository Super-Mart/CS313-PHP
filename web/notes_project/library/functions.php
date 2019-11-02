<?php
require("./library/dbConnect.php");
$db = get_db();

function load_notes()
{
    global $db;
    try {
        // prepare the statement
        $statement = $db->prepare('SELECT * FROM note');
        $statement->execute();

        // Go through each result
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            echo '<tr class="table-secondary">';
            echo '<td>' . $row['title'] . '</td>';
            echo '<td>' . $row['content'] . '</td>';
            echo '<td>';
            // get the topics now for this scripture
            $stmtCategory = $db->prepare('SELECT name FROM category c'
                . ' INNER JOIN note_category nc ON nc.categoryId = c.id'
                . ' WHERE nc.noteId = :noteId');

            $stmtCategory->bindValue(':noteId', $row['id']);
            $stmtCategory->execute();

            // Go through each topic in the result
            while ($categoryRow = $stmtCategory->fetch(PDO::FETCH_ASSOC)) {
                echo '<ul><li>' . $categoryRow['name'] . '</li></ul>';
            }

            echo '</td><td><a href="deleteNote.php?id=' . $row['id'] . '"><button class="btn btn-danger btn-sm" id="delete">Delete</button></a></td></tr>';
        }
    } catch (PDOException $ex) {
        echo "Error with DB. Details: $ex";
        die();
    }
}

function load_categories()
{
    global $db;

    try {

        // prepare the statement
        $statement = $db->prepare('SELECT * FROM category');
        $statement->execute();

        // Go through each result
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['id'];
            $name = $row['name'];

            // Notice that we want the value of the checkbox to be the id of the label
            echo "<input type='checkbox' name='chkCategories[]' id='chkCategories$id' value='$id'>";

            // Also, so they can click on the label, and have it select the checkbox,
            // we need to use a label tag, and have it point to the id of the input element.
            // The trick here is that we need a unique id for each one. In this case,
            // we use "chkTopics" followed by the id, so that it becomes something like
            // "chkTopics1" and "chkTopics2", etc.
            echo "<label for='chkCategories$id' class='chkBox'>$name</label><br />";

            // put a newline out there just to make our "view source" experience better
            echo "\n";
        }
    } catch (PDOException $ex) {
        // Please be aware that you don't want to output the Exception message in
        // a production environment
        echo "Error connecting to DB. Details: $ex";
        die();
    }
}

function load_cats()
{
    global $db;

    try {

        // prepare the statement
        $statement = $db->prepare('SELECT * FROM category');
        $statement->execute();

        // Go through each result
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $id = $row['id'];
            $name = $row['name'];

            echo '<a href=deleteCat.php?id=' . $id . '><li>' . $name . '</li></a>';
        }
    } catch (PDOException $ex) {
        // Please be aware that you don't want to output the Exception message in
        // a production environment
        echo "Error connecting to DB. Details: $ex";
        die();
    }
}
