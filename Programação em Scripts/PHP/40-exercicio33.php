<?php
    function cortaTexto(&$texto, $corte) {
        $inicio = substr($texto, 0, $corte);
        $texto = substr($texto, $corte);
        return $inicio;
    }

    $texto = "texto";
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
        echo cortaTexto($texto, 2) . "<br>";
        echo $texto;
    ?>
</body>
</html>
