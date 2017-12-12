<?php
include('conex.php');
# error_reporting(0);

# Variables para las impresiones en pantalla:
$thead='
        <table class="table table-responsive table-bordered">
          <thead class="bg-dark text-light">
            <th class="text-center"><strong>Código del Resultado</strong></th>
            <th class="text-center" colspan="3"><strong>Nombre del Resultado</strong></th>
          </thead>
          <tbody class="bg-light">
       ';
$tfin='
      </tbody>
      </table>
      <!--<small> <p class="card-text text-justify">Para agregar un resultado, solo debemos hacer clic en el botón <strong>"Agregar Regional"</strong></p></small>-->
     ';
$tvacio='
        <table class="table table-responsive table-bordered">
          <thead class="bg-dark text-light">
            <th class="text-center"><strong>Código del Resultado</strong></th>
            <th class="text-center"><strong>Nombre del Resultado</strong></th>
          </thead>
          <tbody class="bg-light">
            <td class="text-center" colspan="2">No se encontraron Resultados Registrados</td>
          </tbody>
        </table>
        ';
# Iniciamos trayendo los valores del formulario de agregar Regional, si no se obtiene nada las variables
# Quedan vacias lo que crearia una intencion de insersion causando un error, para ello lo que hacemos es que
# condicionamos el estado de las variables, y si traen algun dato se procederá a la insercion de lo contrario
# Solo nos limitamos a mostrar lo que hay:

$codigo=$_POST['codres'];
$modali=$_POST['modali'];
$programa=$_POST['programa'];
$compet=$_POST['nomcomp'];
$resultado=$_POST['nomres'];

# Validamos que hayan valores desde el archivo funciones.js
if (!empty($codigo && $modali && $programa && $compet && $resultado)) {
  $sql="call NResuApr('".$codigo."','".$modali."' ,'".$programa."' ' ,'".$compet."' ,'".$resultado."')";
  $res=$con->query($sql);
}

if (isset($_POST['resul'])) {
  # Si escribimos alguna letra en la caja de busqueda:
  $q=$con->real_escape_string($_POST['resul']);
  $sql="SELECT * FROM Resuapre where Resultado like '%".$q."%'";
  $eje=$con->query($sql);
    if ($eje->num_rows >0) {
      # code...
      echo $thead;
      while ($row=$eje->fetch_row()) {
        # code...S
        echo '
            <form id="modresul" method="post">
            <tr>
              <td class="text-center"><input type="text" readonly name"" class="form-control text-center" value="'.$row[0].'"></td>
              <td class="text-center"><input type="text" name"" class="form-control text-center" value="'.$row[4].'"></td>
              <td class="text-center">
              <button type="button" class="btn btn-outline-success btn-sm"><span class="oi oi-pencil"></span></button>
              </td>
              <td>
              <button type="button" class="btn btn-outline-danger btn-sm"><span class="oi oi-x"></span></button>
              </td>
            </tr>
            </form>
            ';
      }
      echo $tfin;
    }else{
      echo $tvacio;
    }
}else{

$qry="SELECT * FROM resuapre";
$eje=$con->query($qry);
if ($eje->num_rows >0) {
      echo $thead;
    while ($row=$eje->fetch_row()) {
      # Impresión de mensaje de exito!:
      echo '
          <tr>
          <td class="text-center">'.$row[0].'</td>
          <td colspan="3" class="text-center">'.$row[4].'</td>
          </tr>
          ';
    }
    echo $tfin;
}else{
    echo $tvacio;
  }
}
?>
