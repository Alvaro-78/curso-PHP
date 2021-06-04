<?php

    /*Variables locales
        Son las que se definen dentro de una función y no pueden ser usadas fuera de la función, solo están disponibles dentro
        , a no ser uqe hagamnos un return  

        Variables Globales
            Son las que se declaran fuera de una función y están disponibles dentro y fuera de la función    

    */
    $frase = 'hola que ase??';

    function saludo() {

        global $frase;
        echo "<h1>$frase</h1>";

        $year = 2021;
        echo "<h1>$year</h1>";

        return $year;
    }

   saludo();