<?php
define('NOMBRE_CENTRO','CIFP Carlos III');
  $curriculos = [
    ['alumno' => 'Ana López',    'ciclo' => 'DAW', 'video' => 'https://youtu.be/curriculo1','imagen'=>'https://images.unsplash.com/photo-1479936343636-73cdc5aae0c3?ixid=M3w4MjcwNjd8MHwxfHNlYXJjaHwxMDF8fHBlcnNvbnxlbnwwfHx8fDE3OTA2NjgxNTN8MA&ixlib=rb-4.1.0&fit=max&q=80'],
    ['alumno' => 'Marcos Pérez', 'ciclo' => 'DAM',  'video' => 'https://youtu.be/curriculo2','imagen'=>'https://images.unsplash.com/photo-1479936343636-73cdc5aae0c3?ixid=M3w4MjcwNjd8MHwxfHNlYXJjaHwxMDF8fHBlcnNvbnxlbnwwfHx8fDE3OTA2NjgxNTN8MA&ixlib=rb-4.1.0&fit=max&q=80'],
    ['alumno' => 'Laura García', 'ciclo' => 'ASIR', 'video' => 'https://youtu.be/curriculo3','imagen'=>'https://images.unsplash.com/photo-1479936343636-73cdc5aae0c3?ixid=M3w4MjcwNjd8MHwxfHNlYXJjaHwxMDF8fHBlcnNvbnxlbnwwfHx8fDE3OTA2NjgxNTN8MA&ixlib=rb-4.1.0&fit=max&q=80'],
    ['alumno' => 'Fatima Zahra Bouaichat', 'ciclo' => 'DAW', 'video' => 'https://youtu.be/curriculo4','imagen'=>'https://images.unsplash.com/photo-1479936343636-73cdc5aae0c3?ixid=M3w4MjcwNjd8MHwxfHNlYXJjaHwxMDF8fHBlcnNvbnxlbnwwfHx8fDE3OTA2NjgxNTN8MA&ixlib=rb-4.1.0&fit=max&q=80'],
  ];

  function mostrarCurriculo(array $curriculo) {
    echo '<li>', $curriculo['alumno'], ' — ', $curriculo['ciclo'],
         ' — <a href="', $curriculo['video'], '">vídeo</a></li>',
         '- <img src="',$curriculo['imagen'], '" width=25></img>';
  }

  echo '<h1>', NOMBRE_CENTRO, ' — Currículos</h1>';
  echo '<ul>';
  foreach ($curriculos as $key => $alumno) {
     mostrarCurriculo($alumno);
  }
/*   mostrarCurriculo($curriculos[0]);
  mostrarCurriculo($curriculos[1]);
  mostrarCurriculo($curriculos[2]); */
  for ($i=0; $i < sizeof($curriculos) ; $i++) { 
    mostrarCurriculo($curriculos[$i]);
  }
  echo '</ul>';
  

?>