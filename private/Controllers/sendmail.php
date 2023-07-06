<?php
if (isset($_POST['submit']))
{
    $to = $_POST['email'];
    $name = $_POST['name'];
    $from = "Mozi";
    $message = "Sikeresen kifizette a foglalást";
    $subject = "Helyfoglalás";
    $headers = "From:" . $from;
    $result = mail($to, $subject, $message, $headers);

    if ($result)
    {
        echo '<script type="text/javascript">alert("Email elküldve!");</script>';

    }
    else
    {
        echo '<script type="text/javascript">alert("Hoppá! Próbálja meg újra!");</script>';
    }
    echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
}


