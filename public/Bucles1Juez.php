<?php
/**
 * while:Crea un script que sume los números introducidos desde el teclado (STDIN) hasta que se encuentre con el valor de 0. A partir de ahí, el resto de valores deben ser ignorados.
 */
$linea=trim(fgets(STDIN));
$datos=explode(" ",trim($linea));
$contador=0;
$suma=0;
while ( $datos[$contador] != 0 ) {
    $numero=(int)$datos[$contador];
    $contador++;
  	$suma+=$numero;
    echo $suma;
}
echo "Se han sumado " . $contador . " números, dando como resultado un total de " . $suma;
?>