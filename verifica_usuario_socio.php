<?php
	include_once("Dbm.php");
  session_start();

	$usuario=$_POST['usuario'];
	$contraseña=$_POST['contraseña'];

   $obj=new Manager;
   $conexion = $obj->connectDB();

	mysqli_set_charset($conexion, "utf8");


	if ($obj->connectDB()==true){
		  if($usuario!="" && $contraseña!="")
		  {
				$query="SELECT * FROM isesion_s as i INNER JOIN socios as s ON  
                 i.usuario='$usuario' && i.contraseña='$contraseña' && i.c_socio=s.c_socio";
				$result = mysqli_query($conexion,$query);
				if($row = mysqli_fetch_array($result))
			  {
				  if( $row['contraseña'] == $contraseña && $row['usuario']==$usuario)
				  {
				      
          			$_SESSION['k_username'] = $row['usuario'];
			          $_SESSION['k_password'] = $row['contraseña'];
                   $_SESSION['k_nombres'] =   $row['nombre'];
                   
					include_once("verificarsocio2.php");
        		}
			}
			else
			{
				echo "Usuario no registrado";
        	}
    	}
			else{include_once("index.html");}

	}
	mysqli_close($conexion);
?>
