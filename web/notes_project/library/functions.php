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

        echo "<tr class='table-secondary'><td id='$noteId'>$date_added</td>";
        echo '<td>' . $categoryId . '</td>';
        echo "<td>$note_title</td>";
        echo "<td>$note_description</td></tr>";
    }
}
