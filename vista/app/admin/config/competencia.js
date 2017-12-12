$(competencias());

function competencias(comp)
{
	$.ajax({
		url : 'config/competencia.php',
		type : 'POST',
		data : { comp: comp},
		})

	.done(function(resultado){
		$("#tbl_compete").html(resultado);
		console.log(resultado);
	})
}
$(document).on('keyup', '#buscaCp', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		competencias(valorBusqueda);
	}else{
        competencias();
    }
});
