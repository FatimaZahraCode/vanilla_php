<?php    
/**
 * if ... else ...
*Escribe un programa que acepte dos números por teclado (STDIN) y escriba:
*"Pareja de x": En el caso de que ambos sean iguales.
*"El mayor valor es x": Donde x representa el mayor valor de los dos argumentos
*No es necesario comprobar el número de valores introducidos, ya que, como puedes observar, en cada uno de los tests,
* se facilitan siempre dos valores.
 */
$linea=trim(fgets(STDIN));
$datos=explode(" ",trim($linea));
$numero1=(int)$datos[0];
$numero2=(int)$datos[1];

if ($numero1 > $numero2) {
    echo "El mayor valor es ", $numero1;
}elseif($numero2 > $numero1){
    echo "El mayor valor es ", $numero2:
}else {
    echo "Pareja de x";
}

?>