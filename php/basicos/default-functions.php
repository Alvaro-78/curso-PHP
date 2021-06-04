<?php

// Debuggear
    $nombre = "Bastet";
    var_dump($nombre);

// Fechas

$br = "<br/>";
echo date('d-m-Y');
echo $br;
echo time();


// Matemáticas
echo $br;
echo "Raiz cuadrada de  10:".sqrt(10);

echo $br;
echo "Número aleatorio entre 10 y 40:".rand(10, 40);

// Redondea al Alza, número de decimales como segundo parámetro
echo $br;
echo "Redondeo:".round(7.654321, 2);

// Más funciones generales

// Dice el tipo 
echo $br;
echo gettype($nombre);

echo $br;
if(is_string($nombre)) {
    echo "Esa variable es un string";
}

echo $br;
if(!is_float($nombre)) {
    echo "La variable nombre es un número con decimales";
}

// Comprobar si existe una variable
echo $br;
$edad = 42;
if(isset($edad)) {
    echo "La variable existe y su valor es:".$edad;
}else {
    echo "La variable no existe";
}

// Limpia espacios
echo $br;
$frase = "  mi contenido  ";
var_dump(trim($frase));

// Eliminar variables/indices
echo $br;
$tear = 2021;
unset($year);

// Comprueba var vacias
echo $br;
$texto = "Hola que ase?";
if(empty($texto)) {
    echo "La variable está vacia";
}else {
    echo "La variable tiene contenido y es: $texto";
}

// Contar characters de un string
echo $br;
$cadena = "12345";
echo strlen($cadena);


// Encontrar un character, devuelve el índice
// primer parámetro es cambiado por el segundo parámetro
echo $br;
$frase = "Puta vida tete";
echo strpos($frase, "tete");

// Reemplaza palabras
echo $br;
$frase = str_replace("Puta", "Pura", $frase);
echo $frase;

// Mayúsculas y minúsculas
echo $br;
echo strtolower($frase);
echo $br;
echo strtoupper($frase);