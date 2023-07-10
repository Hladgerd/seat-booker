<?php include 'private/Controllers/protect.php'?>
<?php include 'private/Controllers/Seat.php'?>
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

        <div class="row">
            <?php foreach (array_slice($dataSet,0,7) as $data):?>
                <div id="<?=$data->seatId?>" class="seat <?=$data->status?>" data-price="<?=$data->price?>"></div>
            <?php endforeach;?>
        </div>

        <div class="row">
            <?php foreach (array_slice($dataSet,7,7) as $data):?>
                <div id="<?=$data->seatId?>" class="seat <?=$data->status?>" data-price="<?=$data->price?>"></div>
            <?php endforeach;?>
        </div>

        <div class="row">
            <?php foreach (array_slice($dataSet,14,7) as $data):?>
                <div id="<?=$data->seatId?>" class="seat <?=$data->status?>" data-price="<?=$data->price?>"></div>
            <?php endforeach;?>
        </div>
    </div>

    <p class="text">
        <span id="count">0</span> helyet foglalt le <span id="price">0</span> forintért.
    </p>
    <p>
        <a href="href="<?=ROOT?>/payment" id="payment" class="disable_a_href">Fizetek</a>
    </p>
</body>

</html>
