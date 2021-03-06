<?php
include('conex.php');
error_reporting(0);

# Variables para las impresiones en pantalla:
$thead='
        <table class="table table-responsive table-bordered">
          <thead class="bg-dark text-light">
            <th class="text-center"><strong>Código de la modalidad</strong></th>
            <th class="text-center" colspan="3"><strong>Nombre de la modalidad</strong></th>
          </thead>
          <tbody class="bg-light">
       ';
$tfin='
      </tbody>
      </table>
      <!--<small> <p class="card-text text-justify">Para agregar una modalidad, solo debemos hacer clic en el botón <strong>"Agregar Modalidad"</strong></p></small>-->
     ';
$tvacio='
        <table class="table table-responsive table-bordered">
          <thead class="bg-dark text-light">
            <th class="text-center"><strong>Código de la Modalidad</strong></th>
            <th class="text-center"><strong>Nombre de la Modalidad</strong></th>
          </thead>
          <tbody class="bg-light">
            <td class="text-center" colspan="2">No se encontraron Modalidades Registradas</td>
          </tbody>
        </table>
        ';
# Iniciamos trayendo los valores del formulario de agregar Modalidad, si no se obtiene nada las variables
# Quedan vacias lo que crearia una intencion de insersion causando un error, para ello lo que hacemos es que
# condicionamos el estado de las variables, y si traen algun dato se procederá a la insercion de lo contrario
# Solo nos limitamos a mostrar lo que hay:

$VIdModa=$_POST['codmod'];
$VNombModa=$_POST['nommod'];
$VDescModa=$_POST['desmod'];


# Validamos que hayan valores desde el archivo funciones.js
if (!empty($VIdModa && $VNombModa && $VDescModa )) {
  $sql="CALL NModalid('".$VIdModa."','".$VNombModa."','".$VDescModa."')";
  $res=$con->query($sql);
}

if (isset($_POST['modo'])) {
  # Si escribimos alguna letra en la caja de busqueda:
  $q=$con->real_escape_string($_POST['modo']);
  $sql="SELECT * FROM Modalidad where NombModa like '%".$q."%'";
  $eje=$con->query($sql);
    if ($eje->num_rows >0) {
      # code...
      echo $thead;
      while ($row=$eje->fetch_row()) {
        # code...
        echo '
            <form id="modmodal" method="post">
            <tr>
              <td class="text-center"><input type="text " readonly name"" class="form-control text-center" value="'.$row[0].'"></td>
              <td class="text-center"><input type="text" name"" class="form-control text-center" value="'.$row[1].'"></td>
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

$qry="SELECT * FROM Modalidad";
$eje=$con->query($qry);
if ($eje->num_rows >0) {
      echo $thead;
    while ($row=$eje->fetch_row()) {
      # Impresión de mensaje de exito!:
      echo '
          <tr>
          <td class="text-center">'.$row[0].'</td>
          <td colspan="3" class="text-center">'.$row[1].'</td>
          </tr>
          ';
    }
    echo $tfin;
}else{
    echo $tvacio;
  }
}
?>
