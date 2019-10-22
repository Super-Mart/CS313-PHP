<?php
require("dbConnect.php");
$db = get_db();
?>
<!DOCTYPE html>
<html>

<head>
    <title>New Entry</title>
</head>

<body>
    <div>

        <h1>New Note</h1>

        <form id="mainForm" action="insertEntry.php" method="POST">

            <input type="text" id="notesTitle" name="notesTitle" />
            <label for="notesTitle">Title</label>
            <br /><br />

            <label for="notesContent">Content:</label><br />
            <textarea id="notesContent" name="notesContent" rows="4" cols="50"></textarea>
            <br /><br />

            <label>Categories:</label><br />

            <?php

            try {
                $statement = $db->prepare('SELECT notesCategoryId, categoryName FROM notesCategory');
                $statement->execute();

                // Go through each result
                while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                    $notesCategoryId = $row['notesCategoryId'];
                    $name = $row['categoryName'];

                    // Notice that we want the value of the checkbox to be the id of the label
                    echo "<input type='checkbox' name='notesCategory[]' id='notesCategory$categoryNameId' value='$categoryNameId'>";

                    echo "<label for='notesCategory$categoryNameId'>$categoryName</label><br />";

                    // put a newline out there just to make our "view source" experience better
                    echo "\n";
                }
            } catch (PDOException $ex) {
                // Please be aware that you don't want to output the Exception message in
                // a production environment
                echo "Error connecting to DB. Details: $ex";
                die();
            }

            ?>

            <br />

            <input type="submit" value="Add to Database" />

        </form>


    </div>

</body>

</html>