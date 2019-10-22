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

function load_notes_category()
{
    global $db;
    // prepare the statement
    $statement = $db->prepare('SELECT * FROM notes');
    $statement->execute();
    // Go through each result
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        $notesId = $row['notesId'];
        $notesTitle = $row['notesTitle'];
        $notesContent = $row['notesContent'];
        echo '<tr class="table-secondary"><td>' . $notesTitle . '</td>';
        echo '<td>' . $notesContent . '</td>';
        echo '<td>';
        $stmtCategory = $db->prepare('SELECT categoryName FROM notesCategory nc'
            . ' INNER JOIN notes_notesCategory nnc ON nnc.notesCategoryId = nc.notesCategoryId'
            . ' WHERE nnc.notesId = :notesId');

        $stmtCategory->bindValue(':notesId', $row['notesId']);
        $stmtCategory->execute();

        while ($categoryRow = $stmtCategory->fetch(PDO::FETCH_ASSOC)) {
            echo $categoryRow['categoryName'] . ' ';
        }

        echo '</td></tr>';
    }
}
