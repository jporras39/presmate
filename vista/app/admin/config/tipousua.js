$(tipousua());

function tipousua(tus)
{
	$.ajax({
		url : 'config/tipousua.php',
		type : 'POST',
		data : { tus: tus},
		})

	.done(function(resultado){
		$("#tbl_tipousua").html(resultado);
		console.log(resultado);
	})
}
$(document).on('keyup', '#buscaTU', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		tipousua(valorBusqueda);
	}else{
        tipousua();
    }
});
