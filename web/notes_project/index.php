<?php
require "./library/connections.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Notes</title>
    <meta charset="utf-8">
</head>

<body>
    <h1>Notes</h1>
    <div class="cal-day">
        <span>Today's Date</span>
        <?php echo date('l, M d, Y'); ?>
        <?php echo date('h:i A'); ?>
    </div>
    <?php
    $statement = $db->prepare("SELECT * FROM notes");
    $statement->execute();
    // Go through each result
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        // The variable "row" now holds the complete record for that
        // row, and we can access the different values based on their
        // name
        $user_id = $row['userId'];
        $category_id = $row['categoryId'];
        $created_at = $row['created'];
        $note_title = $row['note_title'];
        $note_text = $row['note_text'];

        echo "<p>$user_id $category_id $created_at $note_title $note_text<p>";
    }
    ?>

    <a href="./simple-notes-app-using-javascript-and-phpmysql/index.php" target="_blank" rel="noopener noreferrer">Link</a>
</body>

</html>