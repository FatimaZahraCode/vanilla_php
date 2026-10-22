<?php
//Algoritmo para encontrar un elemento en un array


  $ciclos = ['DAW', 'DAM', 'ASIR'];
  echo in_array('DAW',$ciclos,true);
// inicializa un array ($estudiantes) cuyo valores sean apellidos de la clase.
$estudiantes =["Lopez","Bouaichat","Perez","Martinez","Canovas"];
//  Inicializa una variable ($buscando) cuyo valor sea un apellido.
$buscando="Bouaichat";
//Genera un codigo que indique si el apellido de $buscando esta en el array.
echo in_array($buscando,$estudiantes,true);
foreach ($estudiantes as $apellido) {
  if ($buscando === $apellido) {
    echo "El apellido buscado es ",$apellido;
  }
};

 /* foreach ($estudiantes as $apellido) {
  for ($i=0; $i < sizeof($apellido) ; $i++) { 
    if (condition) {
      # code...
    }
  }
 } */

?>