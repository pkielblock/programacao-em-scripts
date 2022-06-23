<?php 
    $string = "PEDRO@gmail.com";
    $tamanho = strlen($string);

    if(!filter_var($string, FILTER_VALIDATE_EMAIL)) {
        echo "email invalido";
    } elseif($tamanho > 30) {
        echo "emal muito grande";
    } else {
        echo strtolower($string);
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