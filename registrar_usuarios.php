<?php

	session_start();

?>

<!doctype html>

<html>

	<head>
		<meta charset="utf-8">

		<title>Registrar usuarios</title>

        <link rel="stylesheet" type="text/css" href="css/generales.css">
        <link rel="stylesheet" type="text/css" href="css/registro_de_usuarios.css">

    </head>
	<body>

    	<div class="contenedor-principal">
        		<section>

                	<form action="<?php $_SERVER['PHP_SELF']?>" method="post" name="formLogin" id="formLogin" class="form-login">

                    	<h1>Registro de usuarios</h1>

                        <div class="contenedor-controles">

                        	<label>Codigo de socio:</label><input type="text" name="cod" id="nom" placeholder="Codigo de socio" autofocus>
                        	<label>Nombre:</label><input type="text" name="nom" id="nom" placeholder="Ingrese su nombre">
                        	 <label>Usuario:</label><input type="text" name="usu" id="usu" placeholder="Ingrese su usuario">
                        	<label>Contraseña:</label><input type="text" name="con" id="con" placeholder="Ingrese su contraseña">
                        	<label>Direccion:</label><input type="text" name="dire" id="dire" placeholder="Ingrese su direccion">



                    		<input type="submit" name="registrar" id="registrar" value="Registrar">

                    	</div>
                         <br><hr>
                        <span class="mensajes"><?php echo $mensaje;?></span>

                    </form>

                	<a href="index.php" class="link-menu">Menu Principal</a>

                </section>

        </div>

	</body>

</html>
