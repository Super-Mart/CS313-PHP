<?php
include("./library/dbConnect.php");
$db = $db = get_db();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Notes - Home</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Subrayada:400,700|Montserrat:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <nav class="navbar navbar-dark bg-primary pl-5 pr-5">
        <a class="navbar-brand" href="./index.php">Notes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navbarColor01">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="./index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        <div class="container-fluid p-5">
            <div class="text-center">
                <h1 class="display-3">Notes</h1>
            </div>
            <div class="c_date">
                <h2>Today's Date</h2>
                <h3><?php
                    $date = new DateTime("now", new DateTimeZone('America/Boise'));
                    echo $date->format('l, M d, Y h:i A');
                    ?>
                </h3>
            </div>
            <?php
            try {

                // prepare the statement
                $statement = $db->prepare('SELECT * FROM notes');
                $statement->execute();

                // Go through each result
                while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
                    echo '<p>';
                    echo '<strong>' . $row['notesTitle'] . ' ' . $row['notesContent'];
                    echo '<br />';
                    echo 'Category: ';

                    $stmtCategory = $db->prepare('SELECT categoryName FROM notesCategory nc'
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

            <!-- <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Note Title</th>
                        <th scope="col">Note Description</th>
                        <th scope="col">Category</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table> -->
            <button><a href="./newEntry.php">Add New Note</a></button>
        </div>

    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" i ntegrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>