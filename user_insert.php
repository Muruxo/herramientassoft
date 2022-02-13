<?php

require_once __DIR__.'/config.php';
require_once __DIR__.'/clase_sql.php'; 

$claseSql = new Class_sql();

// $img =$_FILES['img']['name'];
$ced =$_POST['txtced'];
$ape =$_POST['txtape'];
$tel =$_POST['txttel'];
// $tip =7;
// $est = 1; 
$con =$_POST['txtcon'];
$con2 =$_POST['txtcon2'];
$ema =$_POST['txtema'];
$obs =$_POST['txtobs'];
// $acc = 1;
// $destino=addslashes(file_get_contents($_FILES['img']['tmp_name'])); 
    

$r_cliente = $claseSql->InsertarUser($ape, $ced, $tel, $ema, $con, $obs);





header('Location: index.php');
?>