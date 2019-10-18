<?php
include("./library/functions.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Notes</title>
</head>

<body>
    <h1>Notes</h1>
    <div class="c_date">
        <p>Today's Date</p>
        <h3><?php echo date('l, M d, Y'); ?>
            <?php echo date('h:i A'); ?></h3>
    </div>
    <!-- <ul class="event-list">
        
    </ul> -->
    <?php

    // $statement = $db->prepare("SELECT * FROM note");
    // $statement->execute();
    // Go through each result
    // while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    // The variable "row" now holds the complete record for that
    // row, and we can access the different values based on their
    // name
    // $userId = $row['userId'];
    // $categoryId = $row['categoryId'];
    // $created = $row['created'];
    // $note_title = $row['note_title'];
    // $note_text = $row['note_text'];

    //     $noteId = $row['noteId'];
    //     $note_description = $row['note_description'];
    //     $date_added = $row['date_added'];

    //     echo "<p>$date_added<p>";

    //     echo "<p>$note_description<p>";
    // }
    ?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Date Added</th>
                <th scope="col">Note Description</th>
            </tr>
        </thead>
        <tbody>
            <tr class="table-active">
                <?php load_notes(); ?>
            </tr>
        </tbody>
    </table>
    <!-- <a href="./simple-notes-app-using-javascript-and-phpmysql/index.php" target="_blank" rel="noopener noreferrer">Link</a> -->
</body>

</html>