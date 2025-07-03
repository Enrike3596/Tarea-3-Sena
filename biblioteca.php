<?php
/* 
    Desarrollador: Luis Enrique Cuellar Velasquez
    Programa: Técnico en Sistemas
    Evidencia: Uso de la función operaciones()
*/

function operaciones($num1, $num2, $oper = "S") {
    switch (strtoupper($oper)) {
        case "S": return $num1 + $num2;
        case "R": return $num1 - $num2;
        case "M": return $num1 * $num2;
        case "D":
            return ($num2 != 0) ? $num1 / $num2 : "Error: División por cero.";
        default:
            return "Operación no válida. Use 'S', 'R', 'M' o 'D'.";
    }
}
?>
