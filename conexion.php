<?php

include_once("Cservicios.php");
include_once("Dbm.php");
$c_socio=$_POST['c_socio'];
$nombre=$_POST['nombre'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$direccion=$_POST['direccion'];

$conexion=$objeto->connectDB();
$objconsulta=new libreria;
$result=$objconsulta->insertar_socios($c_socio,$nombre,$direccion,$conexion);
$result2=$objconsulta->insertar_sesion_socios($c_socio,$usuario,$contraseña,$conexion);

echo "Estos datos fueron almacenados en la base de datos: <br> Codigo de administrador:".$c_socio."<br>"."Nombre: ".$nombre.
"<br> Usuario: ".$usuario."<br> Dirección: ".$direccion;



?>
