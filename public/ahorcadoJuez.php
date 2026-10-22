<?php
/**
 * Vamos a construir un ahorcado en la línea de comandos.
 * Para ello vamos a enviar como argumentos una palabra, que será la incógnita y hasta 5 letras que habrá que buscar dentro de la incógnita. Si se envían más letras, únicamente se tendrán en cuenta las 5 primeras letras.
 * La aplicación debe mostrar las letras enviadas que son coincidentes con las de la palabra y un guión en caso de que una de las letras de la palabra no se haya enviado como argumento. Tras cada letra o cada guión bajo habrá un espacio en blanco.
 * Nota: No utilicéis <?= ?> si queréis ahorraros un <?php echo ?>
 */
$linea1=trim(fgets(STDIN));
$incognita=explode(" ",trim($linea1));
echo mb_strlen($incognita[0]);
$linea2=trim(fgets(STDIN));
$letras=explode(" ",trim($linea2));
echo sizeof($letras);
$encontrada = false;
$palabraObtenida = "";
$espacio="_";
for ($i=0; $i < mb_strlen($incognita[0]) ; $i++) { 
    $encontrada = false;
    for ($j=0; $j < count($letras); $j++) { 
        if ($letras[$j] === $incognita[0][$i]) {
            $encontrada = true;
            break;
        }   
    }
    if ($encontrada) {
        $palabraObtenida .= $incognita[0][$i];
    } else {
        $palabraObtenida .= "_";
    }
    $palabraObtenida .= " ";
}
echo trim($palabraObtenida);
?>