<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/public/static/style.css" />
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
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat"></div>
            <div class="seat"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
        </div>

        <div class="row">
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
        </div>

        <div class="row">
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
        </div>

        <div class="row">
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
        </div>

        <div class="row">
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
            <div class="seat occupied"></div>
        </div>
    </div>

    <p class="text">
        <span id="count">0</span> helyet foglalt le <span id="price">0</span> forintért.
    </p>

</body>

</html>
