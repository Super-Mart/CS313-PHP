<?php
require "connections.php";
$db = get_db();
include("functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="images/favicon.html">
    <title>Simple Notes App using JavaScript and PHP/MySQL</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <script src="js/js_code.js"></script>
</head>

<body>

    <div class="col-md-4" style="margin:0 auto;float:none !important; margin-top:50px;margin-bottom:60px">
        <div class="col-md-12 event-list-block">
            <div class="cal-day">
                <span>Today's Date</span>
                <?php echo date('l, M d, Y'); ?>
                <?php echo date('h:i A'); ?>
            </div>
            <ul class="event-list">
                <?php load_notes(); ?>
            </ul>
            <input type="text" class="form-control evnt-input" placeholder="Enter your notes . . . . ." autofocus="autofocus" />
        </div>
    </div>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/script.js"></script>

</body>

</html>