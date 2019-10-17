<?php
require_once "./library/connections.php";
$db = get_db();

function load_notes()
{
    $statement = $GLOBALS['$db']->prepare("SELECT * FROM note");
    $statement->execute();
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $noteId = $row['noteId'];
        $note_description = $row['note_description'];
        $date_added = $row['date_added'];

        echo '<li id="' . $noteId . '">' . $note_description . '
    <a href="#" style="color:blue;" class="event-close"> &#10005; </a>
</li>';
    }
}
