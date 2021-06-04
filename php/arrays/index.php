<?php

    // Declarar una array con datos
    $peliculas = array("Batman", "LOTR", "La Vida Es Bella");
    // Sacar un valor de la array
    echo $peliculas[2];
    // Toda la logitud    
    var_dump($peliculas[0]);


    // Hacer un bucle para mostrar todos los valores de la array
    $cantantes = ["Bisbal", "2pac", "JLO", "Chenoa"];
    var_dump($cantantes);

    // Lo rodeamos de un echo <ul> para que nos pinte una lista de html
    // count() nos da el número de componentes de la array
    echo "<ul>";
    for($i = 0; $i < count($cantantes); $i++) {
        echo "<li>".$cantantes[$i]."</li>";
    }
    echo "</ul>";

    // Foreach mismo ejemplo mismo resultado
    echo "<ul>";
    // Por cada elemento que tenga la array cantantes crea una variable llamada cantante, y abajo la pinta
    foreach($cantantes as $cantante) {
        echo "<li>".$cantante."</li>";
    }

    echo "</ul>";

    // Array Asociativo  con índice => valor
    $yo = array (
        'nombre' => 'Álvaro',
        'apellido' => 'Aguerré',
        'profesion' => 'programador'
    );
    var_dump($yo);

    // Todos los valores que pasamos por URL(_GET) son arrays asociativos
    var_dump($_GET);
    // Ejemplo ?mascota=gato&nombre=bastet
    /*Imprimiría en pantalla    /var/www/html/arrays/index.php:42:
        array (size=2)
        'mascota' => string 'gato' (length=4)
        'nombre' => string 'bastet' (length=6)
    */

    // Arrays Multidimensionales

    $contactos = array(
        array(
            'nombre' => 'Pepe',
            'email' => 'pepe@gmail.com'
        ),
        array(
            'nombre' => 'Luis',
            'email' => 'luis@gmail.com'
        ),
        array(
            'nombre' => 'Maria',
            'email' => 'maria@gmail.com'
        ),
    );
    // Acceder al array con la posición y buscamos dentro un índice
    echo $contactos[1]['nombre'];

    echo "<ul>";
    foreach($contactos as $contacto) {
        var_dump($contacto['nombre']);
    }


    // Funciones de Arrays

    $cantantes = ["Bisbal", "2pac", "JLO", "Chenoa"];
    // asrot ordena alfabéticamente, arsort a la inversa
    asort($cantantes);
    var_dump($cantantes);

    // sort odena alfabéticamente y numéricamente

    $numeros = [1,2,3,4,5,6,7,8];
    sort($numeros);
    var_dump($numeros);

    // Añadimos un nuevo índice  a una array
    $cantantes[] = 'Estopa';
    var_dump($cantantes);

    // Método push
    array_push($cantantes, 'Mónica Naranjo');
    var_dump($cantantes);

    // Eliminar 
    // pop quita la última posición del array
    array_pop($cantantes);
    var_dump($cantantes);

    // unset elimina la posición de la array
    unset($cantantes[0]);
    var_dump($cantantes);

    // Sacar el índice de forma aleatoria
    $indice = array_rand($cantantes);
    echo $cantantes[$indice];
    
    // Buscar dentro de una array por el índice, nos devuelve la posición en la array
    $res = array_search('Estopa', $cantantes);
    var_dump($res);

    // Contar numero de elementos
    echo "hay". count($cantantes) ."cantantes";
    echo "<br/>";
    echo sizeof($cantantes);

