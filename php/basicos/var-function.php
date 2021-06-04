<?php

    function buenasDias() {
        return "<h1>Hola!! Buenos dias</h1>";
    }

    function buenasTardes() {
        return "<h1>Hey que tal la tarde??</h1>";
    }

    function buenasNoches() {
        return "<h1>A dormir!!</h1>";
    }

    $horario = "Dias";

    $miFuncion = "buenas".$horario;

    echo $miFuncion();