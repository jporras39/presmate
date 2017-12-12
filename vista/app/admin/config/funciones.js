/*
Archivo para pasar los formularios de la Configuración, para el paso de formularios.
Funcion para agregar datos a la tabla region
*/
function addreg(){
/*
Capturamos en una variable todos los datos de un formulario que tenga
la Identificación requerida y al cual le pasamos la funcion serialize que se encarga
de traer todas las entradas en un arreglo y pasarlo asi mismo a un archivo php
que se encarga de procesarlo:
*/
  var dataregion = $('#fregional').serialize();
/*
Usamos ajax para hacer el proceso, indicamos donde se encuentra el archivo y los datos que le estoy pasando
*/
    $.ajax({
        type: "POST",
        url: "config/region.php",
        data: dataregion,
        success: function(data) {
          alert('Regional Guardada Correctamente.');
          }
  });
/*
Fin de la funcion de paso de datos a guardar en la tabla Regional
*/
}
