<?php

    function getNombre($nombre) {
        $texto = "<h4>El nombre es: $nombre</h4>";
        return $texto;
    }

    function getApellidos($apellidos) {
        $texto = "<h4>Los apellidos son: $apellidos</h4>";
        return $texto;
    }

    function devuelveNombre($nombre, $apellidos) {
        $texto = getNombre($nombre)
        ."<br/>".
        getApellidos($apellidos);

        return $texto;
    }

echo devuelveNombre("Pepe", "Navarro");

