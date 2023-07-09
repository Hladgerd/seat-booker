<?php include 'private/Controllers/protect.php'?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/public/static/style.css" />
    <script src="/public/static/script.js" defer type="text/javascript"></script>
    <title>Movie Seat Booking</title>

</head>

<body>
    <ul class="showcase">
        <li>
            <div class="seat"></div>
            <small>Szabad</small>
        </li>
        <li>
            <div class="seat selected"></div>
            <small>Foglalt</small>
        </li>
        <li>
            <div class="seat occupied"></div>
            <small>Elkelt</small>
        </li>
    </ul>

    <div class="container">
        <div class="screen"></div>

        <?php foreach ($this->oPosts as $oPost): ?>
            <h1><a href="<?=ROOT_URL?>?p=blog&amp;a=post&amp;id=<?=$oPost->id?>"><?=htmlspecialchars($oPost->title)?></a></h1>

            <p><?=nl2br(htmlspecialchars(mb_strimwidth($oPost->body, 0, 100, '...')))?></p>
            <p><a href="<?=ROOT_URL?>?p=blog&amp;a=post&amp;id=<?=$oPost->id?>">Want to see more?</a></p>
            <p class="left small italic">Posted on <?=$oPost->createdDate?></p>

            <?php require 'inc/control_buttons.php' ?>
            <hr class="clear" /><br />
        <?php endforeach ?>

        <div class="row">
            <div class="seat occupied" data-nr="1"></div>
            <div class="seat occupied" data-nr="2"></div>
            <div class="seat occupied" data-nr="3"></div>
            <div class="seat" data-nr="4"></div>
            <div class="seat" data-nr="5"></div>
            <div class="seat occupied" data-nr="6"></div>
            <div class="seat occupied" data-nr="7"></div>
            <div class="seat occupied" data-nr="8"></div>
        </div>

        <div class="row">
            <div class="seat occupied" data-nr="9"></div>
            <div class="seat occupied" data-nr="10"></div>
            <div class="seat occupied" data-nr="11"></div>
            <div class="seat occupied" data-nr="12"></div>
            <div class="seat occupied" data-nr="13"></div>
            <div class="seat occupied" data-nr="14"></div>
            <div class="seat occupied" data-nr="15"></div>
            <div class="seat occupied" data-nr="16"></div>
        </div>

        <div class="row">
            <div class="seat occupied" data-nr="17"></div>
            <div class="seat occupied" data-nr="18"></div>
            <div class="seat occupied" data-nr="19"></div>
            <div class="seat occupied" data-nr="20"></div>
            <div class="seat occupied" data-nr="21"></div>
            <div class="seat occupied" data-nr="22"></div>
            <div class="seat occupied" data-nr="23"></div>
            <div class="seat occupied" data-nr="24"></div>
        </div>
    </div>

    <p class="text">
        <span id="count">0</span> helyet foglalt le <span id="price">0</span> forintért.
    </p>
    <p>
        <a href="payment.view.php" id="payment" class="disable_a_href">Fizetek</a>
    </p>
</body>

</html>
