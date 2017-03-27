<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Menouer Nobach</h1>
<h1>apple,pear and orange.</h1>
<form method="post">
    <input type="text" name="fruit">
    <input type="submit" name="submit" value="GO!">















</form>
<?php

$fruit = $_POST['fruit'];

switch ($fruit) {
    case 'apple':
        echo 'Een appel is lekker';
        echo "<img src=appel-artikel.jpg>";
        break;

    case 'pear':
        echo 'een pear is rond';
        echo "<img src=7-01301_peer.jpg>";
        break;

    case 'orange':
        echo 'Een sinaasappel is oranje';
        echo "<img src=sinaasappel-large.jpg>";
        break;

    default:
        echo 'I dont know what fruit that is';



}




?>
</body>
</html>