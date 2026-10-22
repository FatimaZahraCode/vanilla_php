<?php
/**
 * Calculadora Básica
 * Vamos a crear una aplicación que acepte 3 valores desde el teclado (STDIN):
 * operador: uno de los cuatro operadores básicos:
 * + para la suma
 * - para la resta
 * x para la multiplicación
 * : para la división
 * operando 1
 * operando 2
 * La aplicación debe devolver el resultado de realizar la operación seleccionada con los dos operandos enviados desde el teclado.
 * Nota: en este caso, el resutado va encerrado entre etiquetas HTML <p> y </p>
 */
$linea=trim(fgets(STDIN));
$datos=explode(" ",trim($linea));
$operador=$datos[0];
$operando1=(int)$datos[1];
$operando2=(double)$datos[2];
switch ($operador) {
    case '+':
        $operacion=$operando1 + $operando2;
        break;
    case '-':
        $operacion=$operando1 - $operando2;
        break;
    case 'x':
        $operacion=$operando1 * $operando2;
        break;
    case ':':
        $operacion=$operando1 / $operando2;
        break;
    default:
        $operacion="El operador esta mal. Vuelve a intentarlo";
        echo $operacion;
        break;
}
echo "<p>". $operando1 . " " . $operador . " " . $operando2 . " = " . $operacion . "</p>";
//echo "<p>".$operando1. $operador . $operando2 . "= " $operacion . "</p>";

?>