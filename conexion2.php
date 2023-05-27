<?php

include_once("Cservicios.php");
include_once("Dbm.php");
$codigo=$_POST['codigo'];
$id_cate=$_POST['id_cate'];
$titulo=$_POST['titulo'];
$autor=$_POST['autor'];
$disponibilidad=$_POST['disponibilidad'];
$stock=$_POST['stock'];

$conexion=$objeto->connectDB();
$objconsulta=new libreria;
$result=$objconsulta->agregarlibro($codigo,$id_cate,$titulo,$autor,$disponibilidad,$stock,$conexion);

echo "Estos datos fueron almacenados en la base de datos: <br> Codigo del libro:".$codigo."<br>"."categoria: ".$id_cate.
"<br> titulo: ".$titulo."<br> Autor: ".$autor."<br> Disponibilidad: ".$disponibilidad."<br> Stock: ".$stock;



?>
