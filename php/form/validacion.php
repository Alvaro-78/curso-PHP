<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validaciones</title>
</head>
<body>
    <h1>Formularios en PHP</h1>
    <?php

    if(isset($_GET['error'])) {
        $error = $_GET['error'];
        if($error == 'faltan_datos') {
            echo'<strong style="color:red>Introduce todos los datos de los campos</strong>';
        }
    }
    ?>
    <form action="process.php" method="POST">
        <label for="nombre">Nombre:</label><br>
        <p><input type="text name="nombre" pattern="[A-Za-z]+"></p>

        <label for="apellidos">Apellidos:</label><br>
        <p><input type="apellidos" name="apellidos" required="required" pattern="[A-Za-z]+"></p>

        <label for="edad">Edad:</label><br>
        <p><input type="number" name="edad" required="required" pattern="[0-9]+"></p>

        <label for="email">Email:</label><br>
        <p><input type="email" name="email" required="required"></p>

        <label for="pass">Password:</label><br>
        <p><input type="password" name="pass"></p>

        <input type="submit" value="Validar">
    </form>
</body>
</html>