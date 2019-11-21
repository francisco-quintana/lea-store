<?php

include ("conexion.php");

$res=$cnx->query("select * from productos");

$datos=array();
foreach($res as $row){

    $datos[]=$row;

}
echo json_encode($datos);
