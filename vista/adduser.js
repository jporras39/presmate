$(document).ready(function() {
    //Cuando el documento este listo nos traemos todos los datos del formulario llamado #reguser, y esto lo hacemos cuando se oprima el boton #saveuser:
    $('#saveuser').click(function(e){
        e.preventDefault();
        var dataString = $('#reguser').serialize();

        alert('Datos Agregados: '+dataString);

        $.ajax({
            type: "POST",
            url: "cruduser.php",
            data: dataString,
            success: function(data) {
                $("#mensaje").html(data);
            }
        });
    });
});