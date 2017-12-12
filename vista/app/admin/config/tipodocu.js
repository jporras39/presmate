$(tipodocu());

function tipodocu(tdi)
{
	$.ajax({
		url : 'config/tipodocu.php',
		type : 'POST',
		data : { tdi: tdi},
		})

	.done(function(resultado){
		$("#tbl_tipodocu").html(resultado);
		console.log(resultado);
	})
}
$(document).on('keyup', '#buscaTD', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		tipodocu(valorBusqueda);
	}else{
        tipodocu();
    }
});
