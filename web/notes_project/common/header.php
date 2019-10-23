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