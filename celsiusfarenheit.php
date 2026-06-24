<?php
$celsius_list = [0, 25, 37.5, 100];
$i = 0;

while ($i < count($celsius_list)) {
    $celsius = $celsius_list[$i];

    $fahrenheit = ($celsius * 1.8) + 32;

    echo "องศาเซลเซียส: " . $celsius . " °C -> ฟาเรนไฮต์: " . $fahrenheit . " °F\n";
    
    $i++;
?>
