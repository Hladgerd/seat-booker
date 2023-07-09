<?php include "private/Controllers/Payment.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/public/static/style.css" />
    <title>Kassza</title>
</head>
<body>

<div class="container">
    <h4>Adja meg email címét</h4>
    <form method="post">
        <fieldset>
            <label>Név</label>
            <input type="text" name="name">
        </fieldset>
        <fieldset>
            <label>Email</label>
            input type="email" name="email">
        </fieldset>
        <fieldset>
            <button type="submit" name="submit">Küldés</button>
        </fieldset>
    </form>
</div>

</body>
</html>
