<?php
include('conex.php');
error_reporting(0);

# Variables para las impresiones en pantalla:
$thead='
        <table class="table table-responsive table-bordered">
          <thead class="bg-dark text-light">
            <th class="text-center"><strong>Código del Programa</strong></th>
            <th class="text-center"><strong>Nombre del Programa</strong></th>
          </thead>
          <tbody class="bg-light">
       ';
$tfin='
      </tbody>
      </table>
      <!--<small> <p class="card-text text-justify">Para agregar un Programa de formación, solo debemos hacer clic en el botón <strong>"Agregar Regional"</strong></p></small>-->
     ';
$tvacio='
        <table class="table table-responsive table-bordered">
          <thead class="bg-dark text-light">
            <th class="text-center"><strong>Código del Programa</strong></th>
            <th class="text-center"><strong>Nombre del Programa</strong></th>
          </thead>
          <tbody class="bg-light">
            <td class="text-center" colspan="2">No se encontraron Programas de formación registrados</td>
          </tbody>
        </table>
        ';
# Iniciamos trayendo los valores del formulario de agregar Programa, si no se obtiene nada las variables
# Quedan vacias lo que crearia una intención de inserción causando un error, para ello lo que hacemos es que
# condicionamos el estado de las variables, y si traen algun dato se procederá a la inserción de lo contrario
# Solo nos limitamos a mostrar lo que hay:

$codigo=$_POST['codpro'];
$nombre=$_POST['nompro'];
$version=$_POST['version'];
$descrip=$_POST['desc'];

# Validamos que hayan valores desde el archivo funciones.js
if (!empty($codigo && $nombre && $version && $descrip )) {

 $sql="call NPrograma('".$codigo."','".$nombre." ',' ".$version."','".$descrip."')";

  $res=$con->query($sql);
}

if (isset($_POST['prog'])) {
  # Si escribimos alguna letra en la caja de busqueda:
  $q=$con->real_escape_string($_POST['prog']);
  $sql="SELECT * FROM programa where Nombprog like '%".$q."%'";
  $eje=$con->query($sql);
    if ($eje->num_rows >0) {
      # code...
      echo $thead;
      while ($row=$eje->fetch_row()) {
        # code...
        echo '
            <form id="modprograma" method="post">
            <tr>
              <td class="text-center"><input type="text" readonly name"" class="form-control text-center" value="'.$row[0].'"></td>
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

$qry="SELECT * FROM Programa";
$eje=$con->query($qry);
if ($eje->num_rows >0) {
      echo $thead;
    while ($row=$eje->fetch_row()) {
      # Impresion de mensaje de exito!:
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

