<?php
require_once "./library/connections.php";
$db = get_db();

function load_notes()
{
    global $db;
    $statement = $db->prepare("SELECT * FROM note");
    $statement->execute();
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $noteId = $row['noteId'];
        $note_description = $row['note_description'];
        $date_added = $row['date_added'];

        echo '<td id="' . $noteId . '">' . $date_added . '</td>';

        echo '<td id="' . $noteId . '">' . $note_description . '</td>';
    }
}
