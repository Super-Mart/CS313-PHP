<?php
require_once "./library/connections.php";
$db = get_db();

function load_notes()
{
    global $db;
    $statement = $db->prepare("SELECT * FROM notes");
    $statement->execute();
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $noteId = $row['noteId'];
        $categoryId = $row['categoryId'];
        $note_title = $row['note_title'];
        $note_description = $row['note_description'];
        $date_added = $row['date_added'];

        echo '<tr class="table-secondary"><td>' . $date_added . '</td>';
        //echo '<td>' . $categoryId . '</td>';
        echo '<td>' . $note_title . '</td>';
        echo '<td>' . $note_description . '</td></tr>';
    }
}

// function deleteNote(
//     $noteId
// ) {
//     global $db;
//     // Create the prepared statement using the acme connection
//     $stmt = $db->prepare("DELETE FROM notes WHERE noteId = :noteId");
//     // The next four lines replace the placeholders in the SQL
//     // statement with the actual values in the variables
//     // and tells the database the type of data it is  
//     $stmt->bindValue(':noteId', $noteId, PDO::PARAM_INT);

//     // Insert the data
//     $stmt->execute();
//     // Ask how many rows changed as a result of our insert
//     $rowsChanged = $stmt->rowCount();
//     // Close the database interaction
//     $stmt->closeCursor();
//     // Return the indication of success (rows changed)
//     return $rowsChanged;
// }
