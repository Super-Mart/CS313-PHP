<?php
require("dbConnect.php");
$db = get_db();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Notes - Home</title>
</head>

<body>
    <div>
        <h1>Notes</h1>
        <?php
        try {

            // prepare the statement
            $statement = $db->prepare('SELECT notesId, notesTitle, notesContent FROM notes');
            $statement->execute();

            // Go through each result
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                echo '<p>';
                echo '<strong>' . $row['notesTitle'] . ' ' . $row['notesContent'] . ':';
                echo '<br />';
                echo 'Category: ';

                $stmtCategory = $db->prepare('SELECT name FROM notesCategory nc'
                    . ' INNER JOIN notes_notesCategory nnc ON nnc.notesCategoryId = nc.notesCategoryId'
                    . ' WHERE nnc.notesId = :notesId');

                $stmtCategory->bindValue(':notesId', $row['notesId']);
                $stmtCategory->execute();

                while ($categoryRow = $stmtCategory->fetch(PDO::FETCH_ASSOC)) {
                    echo $categoryRow['categoryName'] . ' ';
                }

                echo '</p>';
            }
        } catch (PDOException $ex) {
            echo "Error with DB. Details: $ex";
            die();
        }
        ?>
        <button><a href="./newEntry.php">Add A New Category</a></button>
    </div>

</body>

</html>