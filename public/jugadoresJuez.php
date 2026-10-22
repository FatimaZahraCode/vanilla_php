<?php
/**
 * if ... else ... if ... else ...
 * Escribe un programa que acepte dos núúmeros del teclado (STDIN), representando la puntuación de dos jugadores en un juego.
 * La aplicación debe mostrar:
 * "El jugador ganador es el [1|2] con x": en el caso de que uno de los
 *  jugadores haya obtenido una puntuación más alta que el contrario. 
 * X representa la puntuación del vencedor.
 * "Ha habido empate a x": si los dos jugadores han obtenido la misma puntuación. X será la puntuación alcanzada por ambos.
 */
$linea=trim(fgets(STDIN));
$datos=explode(" ",trim($linea));
$Juan=(int)$datos[0];
$Ana=(int)$datos[1];

if ($Juan > $Ana) {
    echo "El jugador ganador es el 1 con ". $Juan;
} elseif($Ana > $Juan) {
    echo "El jugador ganador es el 1 con ". $Ana;
}else {
    echo "Ha habido empate a " , $Juan;
}
?>