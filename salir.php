<?php
    session_start();
    $_SESSION['usuario1'] = array();
    session_destroy();
    header('location:index.php');
?>