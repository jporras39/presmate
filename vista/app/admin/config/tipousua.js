$(tipousua());

function tipousua(tus)
{
	$.ajax({
		url : 'config/tipousua.php',
		type : 'POST',
		data : { tus: tus},
		})

	.done(function(resultadotu){
		$("#tbl_tipousua").html(resultadotu);
		console.log(resultadotu);
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
