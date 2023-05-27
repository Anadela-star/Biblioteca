<?php

include_once("Cservicios.php");
include_once("Dbm.php");
$c_admin=$_POST['c_admin'];
$nombre=$_POST['nombre'];
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$direccion=$_POST['direccion'];

$conexion=$objeto->connectDB();
$objconsulta=new libreria;
$result=$objconsulta->insertar_admin($c_admin,$nombre,$direccion,$conexion);
$result2=$objconsulta->insertar_i_sesion_admins($c_admin,$usuario,$contraseña,$conexion);

echo "Estos datos fueron almacenados en la base de datos: <br> Codigo de administrador:".$c_admin."<br>"."Nombre: ".$nombre.
"<br> Usuario: ".$usuario."<br> Dirección: ".$direccion;



?>
