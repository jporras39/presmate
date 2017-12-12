$(modalidad());

function modalidad(modo)
{
	$.ajax({
		url : 'config/modalidad.php',
		type : 'POST',
		data : { modo: modo},
		})

	.done(function(resultamod){
		$("#tbl_mod").html(resultamod);
		console.log(resultamod);
	})
}
$(document).on('keyup', '#busca', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		modalidad(valorBusqueda);
	}else{
        modalidad();
    }
});
