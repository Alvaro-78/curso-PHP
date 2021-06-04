<?php
    $texto = "ieeeee";
    if(empty($texto)) {
        $texto = "hola que ase";
        $textoMayus = strtoupper($texto);
        echo "<strong>$textoMayus</strong>";
    }else{
        echo "La variable tiene este contenido:".$texto;
    }