<?php
$carros[] = ["marca" => "ferrari", "modelo" => "F40"];
$carros[] = ["marca" => "ford", "modelo" => "KA"];
$carros[] = ["marca" => "ford", "modelo" => "landau"];
$carros[] = ["marca" => "ford", "modelo" => "mustang"];
$carros[] = ["marca" => "pagani", "modelo" => "zonda"];
$carros[] = ["marca" => "porsche", "modelo" => "carrera 911 GT3"];

echo "<table border>";
echo "<tr>";
echo "<th>Marca</th>";
echo "<th>Modelo</th>";
echo "</tr>";
for ($i = 0; $i < 6; $i++) {
    echo "<tr>";
        echo "<td>";
        echo $carros[$i]["marca"];
        echo "</td>";
        echo "<td>";
        echo $carros[$i]["modelo"];
        echo "</td>";
    echo "<tr>";
}
echo "</table>";

?>