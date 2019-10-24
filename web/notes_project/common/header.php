<div class="text-center">
    <h1 class="display-3">Notes</h1>
</div>
<div class="c_date">
    <h3>Today's Date:</h3>
    <h4> <?php
            $date = new DateTime("now", new DateTimeZone('America/Boise'));
            echo $date->format('l, M d, Y h:i A');
            ?>
    </h4>
</div>