<?php 
   $tabla = array(
        "ACCION" => array("Genshin", "Hustle Castle", "GTA"),
        "AVENTURA" => array("Crash", "Assassins", "CoC"),
        "DEPORTES" => array("fifa 19", "MotoGP19")
   );
   $categorias = array_keys($tabla);

   ?>

   <table border="1">
        <?php require_once './encabezado.php';?>
        <?php require_once './fila1.php';?>
        <?php require_once './fila2.php';?>
        <?php require_once './fila3.php';?>
   </table>