<?php
$c_socio=$_POST['c_socio'];
$codigo=$_POST['codigo'];

include_once("Cservicios.php");
include_once("Dbm.php");
$conexion=$objeto->connectDB();
$objconsulta=new libreria;
$result4=$objconsulta->buscarprestamo($c_socio,$codigo,$conexion);
$row=mysqli_fetch_array($result4);
if($row['c_socio']=$c_socio and $row['codigo']=$codigo){
    
$result=$objconsulta->sumarexistencias($codigo,$conexion);
$result2=$objconsulta->borraregistroprestamo($c_socio,$codigo,$conexion);
$result3=$objconsulta->restarlibrosocio($c_socio,$conexion);
include_once("devolverlibroconfirmacionsi.php");
}
else{
    include_once("devolverlibroconfirmacionno.php");
}
?>