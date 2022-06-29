<?php
$carros[] = ["marca" => "ferrari", "modelo" => "F40"];
$carros[] = ["marca" => "ford", "modelo" => "KA"];
$carros[] = ["marca" => "ford", "modelo" => "landau"];
$carros[] = ["marca" => "ford", "modelo" => "mustang"];
$carros[] = ["marca" => "pagani", "modelo" => "zonda"];
$carros[] = ["marca" => "porsche", "modelo" => "carrera 911 GT3"];

function csv ($array) {
    $str =  implode(";", $array);
    return $str;
}

echo csv($carros);

?>