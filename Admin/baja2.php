<?php
include ("../conexion.php");

$name=$_POST["nombre"];
$desc=$_POST["desc"];
$precio=$_POST["precio"];
$img=$_POST["img"];

$res=$cnx->query("INSERT INTO `productos`(`id`, `name`, `descripcion`, `precio`, `img`) 
VALUES (0,'$name','$desc',$precio,'../product/$img')");

header("location:index.php");

?>