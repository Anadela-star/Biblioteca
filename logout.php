<?php
	session_start(); 
	// Borramos toda la sesion
	session_destroy();
	//echo 'Ha terminado la session <p><a href="index.php">index</a></p>';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SICOES</title>
</head>
<body><link rel="stylesheet" href="css/style.css">

	<table width="100%" align="center">
	<tr>
		<td height="50" align="center" class="subtitulos">Sesión finalizada correctamente...</td>
	</tr>
	<tr>
	    <td height="21" align="center"><a href="index.html">Regresar</a></td>
	</tr>
	</table>
</body>
</html>
