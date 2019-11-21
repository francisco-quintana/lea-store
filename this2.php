<?php
include ("conexion.php");

$d=$_REQUEST["d"];

$res=$cnx->query("select * from productos where id='$d'");

$datos=array();
foreach($res as $row){

    $datos[]=$row;

}
echo json_encode($datos);