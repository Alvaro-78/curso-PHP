<?php
    $error = 'faltan_datos';
    if(!empty($_POST['nombre']) && !empty($_POST['apellidos'])
        && !empty($_POST['edad']) && !empty($_POST['email']) && !empty($_POST['pass'])) {
        $error = 'ok';

        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $edad = $_POST['edad'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
    }else {
        $error = true;
        header("Location:validacion.php?error=$error");
    }
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
    </body>
    </html>l