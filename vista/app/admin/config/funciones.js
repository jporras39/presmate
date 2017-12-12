
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

/*
Funciòn para Adicionar una Modalidad
*/
function addmod(){
/*
Capturamos en una variable todos los datos de un formulario que tenga
la Identificación requerida y al cual le pasamos la funcion serialize que se encarga
de traer todas las entradas en un arreglo y pasarlo asi mismo a un archivo php
que se encarga de procesarlo:
*/
  var datamod = $('#fmod').serialize();
/*
Usamos ajax para hacer el proceso, indicamos donde se encuentra el archivo y los datos que le estoy pasando
*/
    $.ajax({
        type: "POST",
        url: "config/modalidad.php",
        data: datamod,
        success: function(data) {
          alert('Modalidad Guardada Correctamente.');
          }
  });
/*
Fin de la funcion de paso de datos a guardar en la tabla modalidad
*/
}


/*
Funciòn para Adicionar un Centro de Formación
*/
function addcen(){
/*
Capturamos en una variable todos los datos de un formulario que tenga
la Identificación requerida y al cual le pasamos la funcion serialize que se encarga
de traer todas las entradas en un arreglo y pasarlo asi mismo a un archivo php
que se encarga de procesarlo:
*/
  var datacen = $('#fcen').serialize();
/*
Usamos ajax para hacer el proceso, indicamos donde se encuentra el archivo y los datos que le estoy pasando
*/
    $.ajax({
        type: "POST",
        url: "config/centro.php",
        data: datacen,
        success: function(data) {
          alert('Centro de Formación Guardado  Correctamente.');
          }
  });
/*
Fin de la función de paso de datos a guardar en la tabla CentForm
*/
}

/*
Funciòn para Adicionar un Programa de Formación
*/
function addpro(){
/*
Capturamos en una variable todos los datos de un formulario que tenga
la Identificación requerida y al cual le pasamos la funcion serialize que se encarga
de traer todas las entradas en un arreglo y pasarlo asi mismo a un archivo php
que se encarga de procesarlo:
*/
  var datapro = $('#fpro').serialize();
/*
Usamos ajax para hacer el proceso, indicamos donde se encuentra el archivo y los datos que le estoy pasando
*/
    $.ajax({
        type: "POST",
        url: "config/programa.php",
        data: datapro,
        success: function(data) {
          alert('Programa de Formación Guardado  Correctamente.');
          }
  });
/*
Fin de la función de paso de datos a guardar en la tabla Programa
*/
}

/*
Funciòn para Adicionar una Competencia
*/
function addcomp(){
/*
Capturamos en una variable todos los datos de un formulario que tenga
la Identificación requerida y al cual le pasamos la funcion serialize que se encarga
de traer todas las entradas en un arreglo y pasarlo asi mismo a un archivo php
que se encarga de procesarlo:
*/
  var datacomp = $('#fcomp').serialize();
/*
Usamos ajax para har el proceso, indicamos donde se encuentra 
el archivo y los datos que le estoy pasando
*/
    $.ajax({
        type: "POST",
        url: "config/Competencia.php",
        data: datacomp,
        success: function(data) {
          alert('Competencia Guardada Correctamente.');
          }
  });
/*
Fin de la función de paso de datos a guardar en la tabla Competencias
*/
}
/*
Archivo para pasar los formularios de la Configuración, para el paso de formularios.
Funcion para agregar datos a la tabla resuapre
*/
function addresul(){
/*
Capturamos en una variable todos los datos de un formulario que tenga
la Identificación requerida y al cual le pasamos la funcion serialize que se encarga
de traer todas las entradas en un arreglo y pasarlo asi mismo a un archivo php
que se encarga de procesarlo:
*/
  var dataresultado = $('#fresul').serialize();
/*
Usamos ajax para hacer el proceso, indicamos donde se encuentra el archivo y los datos que le estoy pasando
*/
    $.ajax({
        type: "POST",
        url: "config/resultado.php",
        data: dataresultado,
        success: function(data) {
        alert('Resultado Guardado Correctamente.');
          }
  });
/*
Fin de la funcion de paso de datos a guardar en la tabla resultado
*/
}

/*
Archivo para pasar los formularios de la Configuración, para el paso de formularios.
Funcion para agregar datos a la tabla tipous
*/

/*
Funciòn para Adicionar un Tipo de usuario
*/
function addtipous(){
/*
Capturamos en una variable todos los datos de un formulario que tenga
la Identificación requerida y al cual le pasamos la funcion serialize que se encarga
de traer todas las entradas en un arreglo y pasarlo asi mismo a un archivo php
que se encarga de procesarlo:
*/
  var datatipous = $('#ftipou').serialize();
/*
Usamos ajax para hacer el proceso, indicamos donde se encuentra el archivo y los datos que le estoy pasando
*/
    $.ajax({
        type: "POST",
        url: "config/tipousua.php",
        data: datatipous,
        success: function(data) {
        alert('Tipo de usuario  Guardado Correctamente.');
          }
  });
/*
Fin de la funcion de paso de datos a guardar en la tabla tipousua
*/
}

/*
Funciòn para Adicionar un Tipo de documento
*/
function addtipodoc(){
/*
Capturamos en una variable todos los datos de un formulario que tenga
la Identificación requerida y al cual le pasamos la funcion serialize que se encarga
de traer todas las entradas en un arreglo y pasarlo asi mismo a un archivo php
que se encarga de procesarlo:
*/
  var datatipodoc = $('#ftipodoc').serialize();
/*
Usamos ajax para hacer el proceso, indicamos donde se encuentra el archivo y los datos que le estoy pasando
*/
    $.ajax({
        type: "POST",
        url: "config/tipodocu.php",
        data: datatipodoc,
        success: function(data) {
        alert('Tipo de usuario  Guardado Correctamente.');
          }
  });
/*
Fin de la funcion de paso de datos a guardar en la tabla tipousua
*/
}


/*
Funciòn para Adicionar Tipo de Operación o transacción*/
function addtipotrans(){
/*
Capturamos en una variable todos los datos de un formulario que tenga
la Identificación requerida y al cual le pasamos la funcion serialize que se encarga
de traer todas las entradas en un arreglo y pasarlo asi mismo a un archivo php
que se encarga de procesarlo:
*/
  var datatipot = $('#ftipotrans').serialize();
/*
Usamos ajax para hacer el proceso, indicamos donde se encuentra el archivo y los datos que le estoy pasando
*/
    $.ajax({
        type: "POST",
        url: "config/tipotrans.php",
        data: datadetipot,
        success: function(data) {
        alert('Tipo de transacción Guardada Correctamente.');
          }
  });
/*
Fin de la funcion de paso de datos a guardar en la tabla detapro
*/
}