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
    <main>
        <div class="container-fluid">
            <h1>Notes</h1>
            <div class="c_date">
                <p>Today's Date</p>
                <h3><?php echo date('l, M d, Y'); ?>
                    <?php echo date('h:i A'); ?></h3>
            </div>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Date Added</th>
                        <th scope="col">Note Description</th>
                    </tr>
                </thead>
                <tbody>

                    <?php load_notes(); ?>

                </tbody>
            </table>
            <!-- <a href="./simple-notes-app-using-javascript-and-phpmysql/index.php" target="_blank" rel="noopener noreferrer">Link</a> -->
        </div>
    </main>
</body>

</html>