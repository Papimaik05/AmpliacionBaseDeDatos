<?php
// Array con los días de la semana
$dias_semana = array(
    "L" => "Lunes",
    "M" => "Martes",
    "X" => "Miércoles",
    "J" => "Jueves",
    "V" => "Viernes",
    "S" => "Sábado",
    "D" => "Domingo"
);

// Array con los días seleccionados
$dias_seleccionados = array("L", "M", "S");

// Generar la lista con los días seleccionados
echo "<ul>";
foreach ($dias_seleccionados as $dia) {
    echo "<li>" . $dias_semana[$dia] . "</li>";
}
echo "</ul>";
?>