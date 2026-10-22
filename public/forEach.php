<?php
$curriculos = [
    ['alumno' => 'Ana López',    'ciclo' => 'DAW', 'video' => 'https://youtu.be/curriculo1','imagen'=>'https://images.unsplash.com/photo-1479936343636-73cdc5aae0c3?ixid=M3w4MjcwNjd8MHwxfHNlYXJjaHwxMDF8fHBlcnNvbnxlbnwwfHx8fDE3OTA2NjgxNTN8MA&ixlib=rb-4.1.0&fit=max&q=80'],
    ['alumno' => 'Marcos Pérez', 'ciclo' => 'DAM',  'video' => 'https://youtu.be/curriculo2','imagen'=>'https://images.unsplash.com/photo-1479936343636-73cdc5aae0c3?ixid=M3w4MjcwNjd8MHwxfHNlYXJjaHwxMDF8fHBlcnNvbnxlbnwwfHx8fDE3OTA2NjgxNTN8MA&ixlib=rb-4.1.0&fit=max&q=80'],
    ['alumno' => 'Laura García', 'ciclo' => 'ASIR', 'video' => 'https://youtu.be/curriculo3','imagen'=>'https://images.unsplash.com/photo-1479936343636-73cdc5aae0c3?ixid=M3w4MjcwNjd8MHwxfHNlYXJjaHwxMDF8fHBlcnNvbnxlbnwwfHx8fDE3OTA2NjgxNTN8MA&ixlib=rb-4.1.0&fit=max&q=80'],
    ['alumno' => 'Fatima Zahra Bouaichat', 'ciclo' => 'DAW', 'video' => 'https://youtu.be/curriculo4','imagen'=>'https://images.unsplash.com/photo-1479936343636-73cdc5aae0c3?ixid=M3w4MjcwNjd8MHwxfHNlYXJjaHwxMDF8fHBlcnNvbnxlbnwwfHx8fDE3OTA2NjgxNTN8MA&ixlib=rb-4.1.0&fit=max&q=80'],
  ];
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