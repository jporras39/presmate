$(obtener_registros());

function obtener_registros(solicitudes)
{
	$.ajax({
		url : 'config/infoprog.php',
		type : 'POST',
		//dataType : 'html',
		data : { solicitudes: solicitudes },
		})

	.done(function(resultado){
		$("#resultado1").html(resultado);
		console.log(resultado);
	})
}

$(document).on('keyup', '#buscar', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		obtener_registros(valorBusqueda);
	}
	else
		{
			obtener_registros();
		}
});
