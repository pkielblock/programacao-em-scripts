<?php
$array = ["carro1", "carro2", "carro3", "carro4", "carro5"];
echo "Fila de Carros: ";
echo "<pre>";
print_r($array);
echo "</pre>";

for($i = 0; $i <= 2; $i++) {
    array_shift($array);
    $carro = $i + 1;
    echo "Retirando Carro $carro";
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

for($i = 2; $i > 0; $i--) {
    array_unshift($array, "carro$i");
    echo "Colocando  Carro $i";
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}


echo "Fila Final: ";
echo "<pre>";
print_r($array);
echo "</pre>";
?>