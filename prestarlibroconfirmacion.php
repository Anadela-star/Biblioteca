<?php
$c_socio=$_POST['c_socio'];
$codigo=$_POST['codigo'];
date_default_timezone_set("America/Bogota");

$ahora = time();
$cincoDiasEnSegundos = (24 * 60 * 60)  *5;
$manana = $ahora + $cincoDiasEnSegundos;
$fecha_devolucion = date("Y-m-d", $manana);
$fecha_actual = date("Y-m-d", $ahora);

include_once("Cservicios.php");
include_once("Dbm.php");
$conexion=$objeto->connectDB();

$objconsulta=new libreria;

$result=$objconsulta->prestarlibro($c_socio,$conexion);
$row=mysqli_fetch_array($result);
$result2=$objconsulta->verificardisponibilidad($codigo,$conexion);
$row2=mysqli_fetch_array($result2);

if($row['n_librosprestados']<10 && $row2['stock']>0){
    
$result3=$objconsulta->registrarlibroprestado($c_socio,$codigo,$fecha_actual,$fecha_devolucion,$conexion);
$result4=$objconsulta->restarexistencias($codigo,$conexion);
$result5=$objconsulta->sumarlibrosocio($c_socio,$conexion);
$result6=$objconsulta->modificarestadolibro($codigo,$conexion);
include_once("pedidorealizado.php");
}
else if($row['n_librosprestados']==10){
    include_once("pedidodeclinado.php");
}
else{
    include_once("pedidodeclinado2.php");
}




?>
