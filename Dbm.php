<?php
//Clase Manejadora de la base de datos y conexi�n con el servidor
class Manager
{
	var $conexion;

	function connectDB(){

    $server = "localhost";
    $user = "id19883569_root";
    $pass = "Kathemontes123@";
    $bd = "id19883569_libreria";

  $conexion = mysqli_connect($server, $user, $pass,$bd);
	if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
else
echo "";

    return $conexion;
   }
}
?>
