<?php
/* 
    Desarrollador: Luis Enrique Cuellar Velasquez
    Programa: Técnico en Sistemas
    Evidencia: Uso de la función operaciones()
*/

function operaciones($num1, $num2, $oper = "S") {
    switch (strtoupper($oper)) {
        case "Sum": return $num1 + $num2;
        case "Res": return $num1 - $num2;
        case "Mul": return $num1 * $num2;
        case "Div":
            return ($num2 != 0) ? $num1 / $num2 : "Error: División por cero.";
        default:
            return "Operación no válida. Use 'Sum', 'Res', 'Mul' o 'Div'.";
    }
}
?>
