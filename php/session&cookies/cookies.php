<?php
    /*
        Cookie: Es un fichero que se almancena en el ordenador del usuario que visita la web, con el fin 
        de recordad datos o rastrear el comportamiento del mismo en la web
    */

    // Crear cookies

    //setcookie("nombre", "valor solo text, caducidad, ruta , dominio");


    setcookie("micookie", "valor de mi galleta");

    // Cookie con expiración

    setcookie("year", "valor de mi cookie 365 dias", time()+(60*60*24*365));

    ?>
   <a href="ver_cookies.php">Ver las cookies</a>