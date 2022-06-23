<?php

function operation($numero1, $numero2, $operacao) {
    switch ($operacao) {
        case "+":
            $resultado = $numero1 + $numero2;
            break;
        case "-":
            $resultado = $numero1 - $numero2;
            break;
        case "*":
            $resultado = $numero1 * $numero2;
            break;
        case "/":
            $resultado = $numero1 / $numero2;
            break;
        default:
            return false;
            break;
    }
    return $resultado;
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
    <?php
        echo "4 e 2" . "<br>";
        echo "4 + 2 = " . operation(4, 2, "+") . "<br>";
        echo "4 - 2 = " . operation(4, 2, "-") . "<br>";
        echo "4 * 2 = " . operation(4, 2, "*") . "<br>";
        echo "4 / 2 = " . operation(4, 2, "/") . "<br>";
    ?>
</body>
</html>