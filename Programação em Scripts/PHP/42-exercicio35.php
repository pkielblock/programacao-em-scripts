<?php

$array = [1, 2, 3, 4, 5];


function retiraItemMeio(&$array, $indice) {
    unset($array[$indice]);
    return $indice;
}
echo "Array: ";
echo "<pre>";
print_r ($array);
echo "</pre>";

echo "<pre>";
print_r ("Indice a ser retirado: " . retiraItemMeio($array, 2));
echo "</pre>";

echo "Array Apos Retirada do Item: ";
echo "<pre>";
print_r ($array);
echo "</pre>";
?>