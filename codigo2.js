
$('#Enviar').click(function(){

	$.post('conexion2.php',
	{
	  codigo:$('#codigo').val(),
	  id_cate:$('#id_cate').val(),
	  titulo:$('#titulo').val(),
	  autor:$('#autor').val(),
	  disponibilidad:$('#disponibilidad').val(),
	  stock:$('#stock').val(),
	 
	},
	function(info,estado){
	
	   div = document.getElementById('resultado');
			  div.style.display = '';
	  $('#resultado').html(info);
	
	  });
	});