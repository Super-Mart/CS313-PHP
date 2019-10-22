<?php
require_once "./library/connections.php";
$db = get_db();

function load_notes()
{
    global $db;
    $statement = $db->prepare("SELECT * FROM notes");
    $statement->execute();
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $notesId = $row['notesId'];
        $notesTitle = $row['notesTitle'];
        $notesContent = $row['notesContent'];

        echo '<tr class="table-secondary"><td>' . $notesTitle . '</td>';
        echo '<td>' . $notesContent . '</td></tr>';
    }
}
