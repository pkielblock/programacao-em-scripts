<?php

$a = 16 * 32;
$b = 36 / 4;
$c = 123 % 45;
$d = (12 * 15) - 4 * 11 * 10;
$e = 2 * 3 . 1415 * 15 * 30;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    span {
        font-size: 100px;
    }
</style>
<body>
    <span>13 x 32 = <strong><?php echo $a?></strong></span>
    <br>
    <span>36 &divide; 4 = <strong><?php echo $b?></strong></span>
    <br>
    <span>Resto 123 &divide; 35 = <strong><?php echo $c?></strong></span>
    <br>
    <span>(12 x 15) - 4 x 11 x 10 = <strong><?php echo $d?></strong></span>
    <br>
    <span>2 x 3 . 1415 x 15 x 30 = <strong><?php echo $e?></strong></span>
    <br>
</body>
</html>