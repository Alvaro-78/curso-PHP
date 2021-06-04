<?php

    function mostrarArray($numeros) {

        $res = "";

        foreach($numeros as $numero) {
            $res .= $numero."<br/>";
        }

        return $res;
    }

    // Mostrar el array
    $numeros = [8,5,7,4,2,6,3,1];
    var_dump($numeros);
    echo mostrarArray($numeros);
    echo "<br/>";
    // Ordenarlo
    sort($numeros);
    echo mostrarArray($numeros);

    //Buscar un elemento
    if (isset($_GET['numero'])) {
        
        $busqueda = $_GET['numero'];
        echo "<h1>El número es $busqueda</h1>";
        
        $search = array_search($busqueda, $numeros);
        
        if(!empty($search)) {
            echo "<h4>El número buscado en el índice es: $search</h4>";
        }else {
            echo "No existe";
        }
    }
    