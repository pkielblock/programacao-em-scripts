<?php
    $numero = 2;
    
    if ($numero % 2 == 0) {
        $imprime = "<strong>O número $numero é par.</strong>";
    } else {
        if($numero == 1) {
            $imprime = "1 não é primo, nem um número composto.";
        } elseif ($numero == 3) {
            $imprime = "3 é usado como pedido de socorro. Para pedir socorro no deserto ou em alguma outra região, basta fazer três fogueiras, porque três é um código mundial.";
        } elseif ($numero == 9) {
            $imprime = "Em Roma, os meninos recebiam seu nome no nono dia de vida.";
        } else {
            $imprime = "Este número é impar.";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-size: 60px;
        }
    </style>
</head>
<body>
    <?php echo $imprime; ?>
</body>
</html>