<?php  //for. Crea el script con el desplegable de años de promoción (2020 a 2025) de la sección for. ?>
<select name="promocion">
<?php for ($i=2020; $i <= 2025 ; $i++) : ?>
    <option value="<?=$i ?>"><?=$i ?></option>
<?php endfor ?>
</select>

<?php 
//while. Añade el cálculo de los años necesarios a tiempo parcial de la sección while. 
// Antes de recargar, calcula a mano cuántas iteraciones hará el bucle y anótalo en un comentario.

  $horasCiclo    = 2000;
  $horasPorAnio  = 700;
  $horasCursadas = 0;
  $anios         = 0;

  while ($horasCursadas < $horasCiclo) {
    $horasCursadas += $horasPorAnio;
    $anios++;
  }

  echo '<p>Años necesarios: ', $anios, '</p>';   // 3
  // primera iteracion 700 horasCursadas equivalente a 1 año , segunda iteracion 1400 horasCursadas es decir 2 años , tercera iteracion 2100 horasCursadas es decir 3 años.

  ?>

  <?php
/**
 * foreach. Añade el array $curriculos con los tres currículos de 2.5 
 * y el listado con foreach (los <li class="curriculo">) de la sección foreach: recorrer un array.
 */
$curriculos = [
    ['alumno' => 'Ana López',    'ciclo' => 'DAW', 'video' => 'https://youtu.be/curriculo1','imagen'=>'https://images.unsplash.com/photo-1479936343636-73cdc5aae0c3?ixid=M3w4MjcwNjd8MHwxfHNlYXJjaHwxMDF8fHBlcnNvbnxlbnwwfHx8fDE3OTA2NjgxNTN8MA&ixlib=rb-4.1.0&fit=max&q=80'],
    ['alumno' => 'Marcos Pérez', 'ciclo' => 'DAM',  'video' => 'https://youtu.be/curriculo2','imagen'=>'https://images.unsplash.com/photo-1479936343636-73cdc5aae0c3?ixid=M3w4MjcwNjd8MHwxfHNlYXJjaHwxMDF8fHBlcnNvbnxlbnwwfHx8fDE3OTA2NjgxNTN8MA&ixlib=rb-4.1.0&fit=max&q=80'],
    ['alumno' => 'Laura García', 'ciclo' => 'ASIR', 'video' => 'https://youtu.be/curriculo3','imagen'=>'https://images.unsplash.com/photo-1479936343636-73cdc5aae0c3?ixid=M3w4MjcwNjd8MHwxfHNlYXJjaHwxMDF8fHBlcnNvbnxlbnwwfHx8fDE3OTA2NjgxNTN8MA&ixlib=rb-4.1.0&fit=max&q=80'],
    ['alumno' => 'Fatima Zahra Bouaichat', 'ciclo' => 'DAW', 'video' => 'https://youtu.be/curriculo4','imagen'=>'https://images.unsplash.com/photo-1479936343636-73cdc5aae0c3?ixid=M3w4MjcwNjd8MHwxfHNlYXJjaHwxMDF8fHBlcnNvbnxlbnwwfHx8fDE3OTA2NjgxNTN8MA&ixlib=rb-4.1.0&fit=max&q=80'],
  ];
?>
<?php foreach ($curriculos as $curriculo) : ?>
    <li class="curriculo">
    <?php foreach ($curriculo as $campo => $valor) : ?>
        <p><?= $valor ?></p>
    <?php endforeach ?>
    </li>
<?php endforeach ; ?>

<?php 
/**
 * foreach con clave. Añade el ejemplo de la lista de definiciones (<dl>) que muestra cada campo de un currículo con su valor.
 */
?>
<ol>
<?php foreach ($curriculos as $curriculo)  : ?>
    <li class="curriculo">
        <dl>
    <?php foreach ($curriculo as $campo => $valor) : ?>
        <dt><?= $campo ?></dt>
            <dd><?= $valor ?></dd>
    <?php endforeach; ?>
        </dl>
    </li>
<?php endforeach; ?>
</ol>

<?php
/**
 * continue y sintaxis alternativa. Añade al final este array, con un cuarto currículo sin vídeo,
 *  y una tabla que muestre solo los currículos con vídeo usando la sintaxis alternativa y continue:
 */

   $curriculosPublicados = [
     ['alumno' => 'Ana López',    'ciclo' => 'DAW',  'video' => 'https://youtu.be/curriculo1'],
     ['alumno' => 'Marcos Pérez', 'ciclo' => 'DAM',  'video' => 'https://youtu.be/curriculo2'],
     ['alumno' => 'Pablo Ruiz',   'ciclo' => 'DAW',  'video' => ''],
     ['alumno' => 'Laura García', 'ciclo' => 'ASIR', 'video' => 'https://youtu.be/curriculo3'],
     ['alumno' => 'Fatima Zahra Bouaichat', 'ciclo' => 'DAW', 'video' => ''],
   ];

   // ha generado tres registros en la tabla donde tienen como identificador la clase "con_video".
   //Tanto el alumno Pablo Ruiz como Fatima Zahra Bouaichat no aparecen porque no tienen un video adjunto
   //  entonces la condicion del if es verdadera y se ejecuta el continue.
?>
<table border= "2px  black">
   <tr><th>Alumno</th><th>Vídeo</th></tr>
   <?php foreach ($curriculosPublicados as $curriculo): ?>
     <?php if ($curriculo['video'] === '') { continue; } ?>
     <tr class="con-video">
       <td><?= $curriculo['alumno'] ?></td>
       <td><a href="<?= $curriculo['video'] ?>">vídeo</a></td>
     </tr>
   <?php endforeach; ?>
 </table>
 <?php 
/**
 * Investiga. Busca qué es la directiva max_execution_time y 
 * averigua su valor en tu entorno con echo ini_get('max_execution_time'); (en un script aparte, que puedes borrar después). 
 * ¿Qué le ocurriría a una petición cuyo script entra en un bucle infinito? ¿Por qué el servidor necesita ese límite? 
 * Escribe las respuestas en un comentario del fichero. No dejes un bucle infinito en RA3_bucles.php.
 */



?>


