<?php
    $matriz = array('Hola pepe', 90);
    $titulo = "master en php";
    $numero = 12;
    $verdadero = true;

    if(is_array($matriz)) {
        echo "<h1>El array es un array</h1>";
    }

    if(is_string($titulo)) {
        echo "<h1>La variable es un string</h1>";
    }    
    
    if(is_integer($numero)) {
        echo "<h1>La variable es un número</h1>";
    }    
    
    if(is_bool($verdadero)) {
        echo "<h1>La variable es booleana</h1>";
    }