<?php


$raio1 = pow(15, 3);
$pi = 3.1415;
$volume1 = (4 * $pi * $raio1) / 3;

$raio2 = pow(38, 3);
$volume2 = (4 * $pi * $raio2) / 3;

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
    <span>V = <sup>4</sup>&frasl;<sub>3</sub> x &pi; x 5<sup>3</sup> = <strong><?php echo $volume1; ?></strong></span>
    <br>
    <span>V = <sup>4</sup>&frasl;<sub>3</sub> x &pi; x 38<sup>3</sup> = <strong><?php echo $volume2; ?></strong></span>
</body>
</html>