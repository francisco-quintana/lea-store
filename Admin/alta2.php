<?php
include ("../conexion.php");

$id=$_POST["id"];

$res=$cnx->query("DELETE FROM `productos` WHERE id='$id'");

header("location:index.php");

?>