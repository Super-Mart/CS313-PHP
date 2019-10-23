<?php
require("./library/dbConnect.php");
$db = get_db();

function load_notes()
{
    global $db;
    // try {
    //     // prepare the statement
    //     $statement = $db->prepare('SELECT * FROM note');
    //     $statement->execute();

    //     // Go through each result
    //     while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    //         echo '<tr class="table-secondary">';
    //         echo '<td>' . $row['title'] . '</td>';
    //         echo '<td>' . $row['content'] . '</td>';

    //         // get the topics now for this scripture
    //         $stmtCategory = $db->prepare('SELECT name FROM category c'
    //             . ' INNER JOIN note_category nc ON nc.categoryId = c.id'
    //             . ' WHERE nc.noteId = :noteId');

    //         $stmtCategory->bindValue(':noteId', $row['id']);
    //         $stmtCategory->execute();

    //         // Go through each topic in the result
    //         while ($categoryRow = $stmtCategory->fetch(PDO::FETCH_ASSOC)) {
    //             echo '<td><ul><li>' . $categoryRow['name'] . '</ul></li></td>';
    //         }

    //         echo '</tr>';
    //     }
    // } catch (PDOException $ex) {
    //     echo "Error with DB. Details: $ex";
    //     die();
    // }
    try {
        // prepare the statement
        $statement = $db->prepare('SELECT * FROM note');
        $statement->execute();

        // Go through each result
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

            echo '<p>' . $row['title'] . ' ' . $row['content'];
            echo '<br />';
            echo 'Category: ';

            // get the topics now for this scripture
            $stmtCategory = $db->prepare('SELECT name FROM category c'
                . ' INNER JOIN note_category nc ON nc.categoryId = c.id'
                . ' WHERE nc.noteId = :noteId');

            $stmtCategory->bindValue(':noteId', $row['id']);
            $stmtCategory->execute();

            // Go through each topic in the result
            while ($categoryRow = $stmtCategory->fetch(PDO::FETCH_ASSOC)) {
                echo $categoryRow['name'] . ' ';
            }

            echo '</p>';
        }
    } catch (PDOException $ex) {
        echo "Error with DB. Details: $ex";
        die();
    }
}
