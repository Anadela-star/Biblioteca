
$('#Enviar').click(function(){

	$.post('conexion1.php',
	{
	  c_admin:$('#c_admin').val(),
	  nombre:$('#nombre').val(),
	  usuario:$('#usuario').val(),
	  contraseña:$('#contraseña').val(),
	  direccion:$('#direccion').val(),
	},
	function(info,estado){
	
	   div = document.getElementById('resultado');
			  div.style.display = '';
	  $('#resultado').html(info);
	
	  });
	});