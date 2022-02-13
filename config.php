<?php
    define('HOST','localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BD', 'medic');

    $con = mysqli_connect(HOST, USER, PASS, BD) OR die ('Error de Conexión');

?>

<!-- 
--------------------------------------------------------------
Hecho por : 

Login - Ordoñez, Naranjo, Lara 
Pagina Principal - Ordoñez 
Conexion BDD - Ordoñez 
Formulario - Lara 
Salir - Lara 
Index - Naranjo 
Funciones - Naranjo  -->