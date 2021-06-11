<?php

/*
    Sesión: Almacenar y persistir datos del usuario mientras se navega en un sitio web hasta que se 
    cierra sesión o se cierra el navegador
 */

 //Iniciar sesión
session_start();

 // Variable local

 $variable_normal = "Soy una cadena de texto";

 // Variable de sesión

 $_SESSION['variable_persistente'] = "Hola soy una sesión activa";

 echo $variable_normal."<br/>";
 echo $_SESSION['variable_persistente'];