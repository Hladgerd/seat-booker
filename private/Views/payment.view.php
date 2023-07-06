<?php
if($_POST['send'])
{
    $email=$_POST[email];
    $fromAddr='Mozi'; // the address to show in From field.
    $recipientAddr = $_POST[email];
    $subjectStr = 'Moziszék foglalás';
    $mailBodyText = <<<HHHHHHHHHHHHHH

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>Demo From Website</title>
</head>
<body>
<table>
<tr>
<td style="width:150px;"><b>Subject:</b></td>
<td><b>:</b></td>
<td style="text-transform:capitalize;">$_POST[subject]</td>
</tr>
<tr>
<td><b>Message</b></td>
<td><b>:</b></td>
<td style="text-transform:capitalize;">$_POST[message]</td>
</tr>

</table>
</body>
</html>
HHHHHHHHHHHHHH;

    $headers= <<<TTTTTTTTTTTT
From: $fromAddr
MIME-Version: 1.0
Content-Type: text/html;
TTTTTTTTTTTT;

    mail($recipientAddr,$subjectStr,$mailBodyText,$headers);
    $_SESSION['msg']="Email elküldve";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Fizetés</title>
    <meta name="generator" content="Bootply" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
</head>

<body>
    <div>
        <h3>A fizetéshez adja meg email címét</h3>
        <p style="color:#FF0000; font-size:12px;"><?php echo $_SESSION['msg'];?><?php echo $_SESSION['msg']="";?></p>
        <form name="mail" action="" method="post">
            <label for="email">Email cím:</label><br>
            <input type="email" name="email" value="" class="form-control" required><br><br>
            <input type="submit" value="Küldés" name="send">
        </form>
    </div>
</body>
</html>
