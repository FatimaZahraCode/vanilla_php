<?php
/**
 * Para crear una tabla en HTML es necesario utilizar etiquetas. A continuación se muestra el código necesario para crear una tabla de 3 filas y 2 columnas.
 * Puedes observar que se generan 3 bloques <tr></tr> con dos bloques <td></td> en cada uno de los anteriores.
 * Crea una aplicación que genere una tabla HTML con tantas filas y columnas como indiquen sus dos primeros argumentos.
 */
$linea=trim(fgets(STDIN));
$datos=explode(" ",trim($linea));
$numero1=(int)$datos[0];
$numero2=(int)$datos[1];
?>
<table border="solid 1px">
<?php for ($i=0; $i < $numero1; $i++) : ?>
    <tr>
  <?php for ($j=0; $j < $numero2 ; $j++) : ?>
      <td></td>
  <?php endfor ?>
  </tr>
<?php endfor ?>
</table>