$(centro());

function centro(cen)
{
	$.ajax({
		url : 'config/centro.php',
		type : 'POST',
		data : { cen: cen},
		})

	.done(function(resultacen){
		$("#tbl_cen").html(resultacen);
		console.log(resultacen);
	})
}
$(document).on('keyup', '#buscaC', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		centro(valorBusqueda);
	}else{
        centro();
    }
});
