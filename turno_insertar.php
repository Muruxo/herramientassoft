<?php


require_once __DIR__.'/config.php';
require_once __DIR__.'/clase_sql.php'; 

$claseSql = new Class_sql();

$id =$_POST['txtced'];
$ape =$_POST['txtape'];
$doc =$_POST['sldoctor'];
$dat =$_POST['dt'];
$hor =$_POST['sltime'];

$r_cliente = $claseSql->InsertarTurno($id, $doc, $dat, $hor);


header('Location: turno.php');

?>