
$('#Enviar').click(function(){

	$.post('conexion.php',
	{
	  c_socio:$('#c_socio').val(),
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