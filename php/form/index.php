<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms PHP & HTML</title>
</head>
<body>
    <h1>Form</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>  
        <p><input type="text" name="nombre" pattern="[a-z]{1,15}" required="required"></p>

        <label for="apellido">Apellido:</label> 
        <p><input type="text" name="apellido" pattern="[a-zA-Z]+" placeholder="apellidos"></p>

        <label for="apellido">Botón:</label> 
        <p><input type="button" name="boton" value="Click me"></p>

        <label for="color">Color:</label> 
        <p><input type="color" name="color"></p>

        <label for="fecha">Fecha:</label> 
        <p><input type="date" name="fecha"></p>

        <label for="email">Email:</label> 
        <p><input type="email" name="email"></p>

        <label for="file">Archivo:</label> 
        <p><input type="file" name="file" multiple="multiple"></p>

        <label for="number">Número:</label> 
        <p><input type="number" name="number" multiple="multiple"></p>

        <label for="pass">Password:</label> 
        <p><input type="password" name="password"></p>

        <label for="url">URL:</label> 
        <p><input type="url" name="url"></p>

        <textarea name="text" id="" cols="30" rows="10"></textarea><br>

        Películas:
        <select name="peliculas">
        <option value="lotr">LOTR</option>
        <option value="batman">Batman</option>
        <option value="sipderman">Spiderman</option>
        </select>

        <label for="sexo">Sexo:</label> 
        <p>
            Hombre<input type="radio" name="sexo" value="hombre">
            Mujer<input type="radio" name="sexo" value="mujer">
        </p>
        
        <input type="submit" value="Enviar">
    </form>
</body>
</html>