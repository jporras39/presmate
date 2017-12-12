$(programa());

function programa(prog)
{
	$.ajax({
		url : 'config/programa.php',
		type : 'POST',
		data : { prog: prog},
		})

	.done(function(resultaprog){
		$("#tbl_prog").html(resultaprog);
		console.log(resultaprog);
	})
}
$(document).on('keyup', '#busca', function()
{
	var valorBusqueda=$(this).val();
	if (valorBusqueda!="")
	{
		programa(valorBusqueda);
	}else{
        programa();
    }
});
