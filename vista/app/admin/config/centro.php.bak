<?php
include('conex.php');
error_reporting(0);
header('Content-Type: text/html; charset=UTF-8');
# Variables para las impresiones en pantalla:
$thead='
        <table class="table table-responsive table-bordered">
          <thead class="bg-dark text-light">
            <th class="text-center" colspan="3"><strong>Codigo del Centro</strong></th>
            <th class="text-center" colspan="3"><strong>Nombre del Centro</strong></th>
          </thead>
          <tbody class="bg-light">
       ';
$tfin='
      </tbody>
      </table>
      <!--<small> <p class="card-text text-justify">Para agregar una regional, solo debemos hacer clic en el boton <strong>"Agregar Regional"</strong></p></small>-->
     ';
$tvacio='
        <table class="table table-responsive table-bordered">
          <thead class="bg-dark text-light">
            <th class="text-center"><strong>Codigo del Centro</strong></th>
            <th class="text-center"><strong>Nombre del Centro</strong></th>
          </thead>
          <tbody class="bg-light">
            <td class="text-center" colspan="3">No se encontraron Centros Registrados</td>
          </tbody>
        </table>
        ';
# Iniciamos trayendo los valores del formulario de agregar Regional, si no se obtiene nada las variables
# Quedan vacias lo que crearia una intencion de insersion causando un error, para ello lo que hacemos es que
# condicionamos el estado de las variables, y si traen algun dato se procederá a la insercion de lo contrario
# Solo nos limitamos a mostrar lo que hay:

$region=$_POST['codreg'];
$codigo=$_POST['codcen'];
$centro=$_POST['nomcen'];

# Validamos que hayan valores desde el archivo funciones.js
if (!empty($region && $codigo && $centro)) {
  $sql="call NCentro('".$codigo."','".$region."','".$centro."')";
  $res=$con->query($sql);
}

if (isset($_POST['cen'])) {
  # Si escribimos alguna letra en la caja de busqueda:
  $q=$con->real_escape_string($_POST['cen']);
  $sql="SELECT * FROM CentForm where NombCent like '%".$q."%'";
  $eje=$con->query($sql);
    if ($eje->num_rows >0) {
      # code...
      echo $thead;
      while ($row=$eje->fetch_row()) {
        # code...
        echo '
            <form id="modcentro" method="post">
            <tr>
              <td class="text-center"><input type="text" readonly name"" class="form-control text-center" value="'.$row[0].'"></td>
              <td class="text-center"><input type="text" name"" class="form-control text-center" value="'.$row[2].'"></td>
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

$qry="SELECT * FROM CentForm";
$eje=$con->query($qry);
if ($eje->num_rows >0) {
      echo $thead;
    while ($row=$eje->fetch_row()) {
      # Impresion de mensaje de exito!:
      echo '
          <tr>
          <td colspan="1" class="text-center">'.$row[0].'</td>
          <td colspan="1" class="text-center">'.$row[2].'</td>
          </tr>
          ';
    }
    echo $tfin;
}else{
    echo $tvacio;
  }
}
?>
