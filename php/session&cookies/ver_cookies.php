<?php
if(isset($_COOKIE['micookie'])) {
    echo "<h1>".$_COOKIE['micookie']."</h1>";
}else {
    echo "No existe la cookie";
}

if(isset($_COOKIE['year'])) {
    echo "<h1>".$_COOKIE['year']."</h1>";
}else {
    echo "No existe la cookie";
}

?>
<a href="borrar_cookies.php">Borrar cookies</a>