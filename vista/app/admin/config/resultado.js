$(resulta());

function resulta(resul)
{
	$.ajax({
		url : 'config/resultado.php',
		type : 'POST',
		data : { resul: resul},
		})

	.done(function(resultAp){
		$("#tbl_resul").html(resultAp);
		console.log(resultAp);
	})
}
$(document).on('keyup', '#buscaRa', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		resulta(valorBusqueda);
	}else{
        resulta();
    }
});
