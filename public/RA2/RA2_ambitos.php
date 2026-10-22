<?php
  function mostrarCiclo() {
    $nombreCiclo = "Desarrollo de Aplicaciones Web";
    echo '<p>', $nombreCiclo, '</p>';
  }

  mostrarCiclo();

   //echo $nombreCiclo;   // Warning: Undefined variable $nombreCiclo
   /**
    * Salta un aviso porque la variable $nombreCiclo es una variable local y no es visible desde fuera de la funcion
    * mostrarCiclo. 
    */
?>

<?php
  $totalCiclosMostrados = 0;

  function registrarVisita() {
    global $totalCiclosMostrados;
    $totalCiclosMostrados++;
  }

  registrarVisita();
  registrarVisita();
  registrarVisita();

  echo '<p>Ciclos mostrados: ', $totalCiclosMostrados, '</p>';   // 3
?>

<?php
  define('NOMBRE_CENTRO', 'CIFP Carlos III');

  function pie() {
    // Sin "global": las constantes son accesibles en cualquier ámbito
    echo '<footer>', NOMBRE_CENTRO, '</footer>';
  }

  pie();
?>

<?php
  function contadorVisitas() {
    static $visitas = 0;
    $visitas++;
    echo '<p>Visita número ', $visitas, '</p>';
  }

  contadorVisitas();   // Visita número 1
  contadorVisitas();   // Visita número 2
  contadorVisitas();   // Visita número 3

  /**
   * El contador vuelve a contar desde cero porque el script se lee , se interpreta y se cierra , no se guardan los valores 
   * en ningun sitio. Se ejecuta el script con la ayuda del servidor y se cierra.
   * las variables super globales son variables que estan predefinidas que se usan para almacenar o recoger datos para ser usados 
   * posteriormente. Son variables internas que tienen funciones predeterminadas. Por ejemplo $_GET ,$_POST,$_SESSION,$_COOKIES.
   */
?>