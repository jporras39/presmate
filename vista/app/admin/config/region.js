$(regional());

function regional(reg)
{
	$.ajax({
		url : 'config/region.php',
		type : 'POST',
		data : { reg: reg},
		})

	.done(function(resultado){
		$("#tbl_reg").html(resultado);
		console.log(resultado);
	})
}
$(document).on('keyup', '#buscaR', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		regional(valorBusqueda);
	}else{
        regional();
    }
});
