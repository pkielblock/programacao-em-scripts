<?php
    $strings = ["pedro", "henrique", "joao", "guilherme"];
    $maior = 0;
    for($i = 0; $i < count($strings); $i++) {
        if(strlen($strings[$i]) > $maior) {
            $maior = strlen($strings[$i]);
        }
    }

    for($i = 0; $i < count($strings); $i++) {
        echo str_pad($strings[$i], $maior, "*", STR_PAD_LEFT) . "<br>";
    }
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
    body {
        font-size: 60px;
    }
</style>
<body>
</body>
</html>