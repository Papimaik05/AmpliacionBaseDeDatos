<?php
// Práctica 3. Diseña un script de PHP que genere dinámicamente una tabla de html de tal
// forma que en la primera fila y primera columna aparezcan los números del 1 al 10 y en
// cada celda el producto de su fila por su columna.

echo "<table>";
//primera fila
echo "<tr>"; 
echo "<th></th>"; //hueco en blanco de sq superior izda
//th en negrita
//td en normal
for($i=1;$i<=10;$i++){
    echo "<th>". $i ."</th>";
}
echo "</tr>";

//filas restantes
for ($i = 1; $i <= 10; $i++) {
    echo '<tr>';
    // Generar la primera columna con los números del 1 al 10
    echo '<th>' . $i . '</th>';
    for ($j = 1; $j <= 10; $j++) {
        echo '<td>' . ($i * $j) . '</td>';
    }
    echo '</tr>';
}
echo "</table>";
?>