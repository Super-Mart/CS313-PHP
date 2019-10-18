<?php
include("./library/functions.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada:400,700|Montserrat:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Notes</title>
</head>

<body>
    <main>
        <div class="container-fluid">
            <div class="text-center">
                <h1 class="display-3">Notes</h1>
            </div>
            <div class="c_date">
                <h2>Today's Date</h2>
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