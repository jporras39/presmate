<?php
include('conex.php');
error_reporting(0);

# Variables para las impresiones en pantalla:
$thead='
<table class="table table-responsive table-bordered">
<thead class="bg-dark text-light">
<th class="text-center"><strong>Código de Tipo de Usuario</strong></th>
<th class="text-center" colspan="3"><strong>Nombre de Tipo de Usuario</strong></th>
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
<th class="text-center"><strong>Código de Tipo de Usuario</strong></th>
<th class="text-center"><strong>Nombre de Tipo de Usuario</strong></th>
</thead>
<tbody class="bg-light">
<td class="text-center" colspan="2">No se encontraron Tipos de Usuario Registradas</td>
</tbody>
</table>
';
//echo $tvacio;
$codigo=$_POST['codiTiUs'];
$nombre=$_POST['nombTiUs'];
$descri=$_POST['describe'];

if (!empty($codigo && $nombre)) {
  # Si no están vacias estas variables:
  $sql="CALL ()";
  $eje=$con->query($sql);
}

if (isset($_POST['tus'])) {
  # Si escribo algo en la caja de busqueda:
  $q=$con->real_escape_string($_POST['tus']);
  $sql="SELECT * FROM TipoUsua where NombTiUs like '%".$q."%'";
  $eje=$con->query($sql);
  if ($eje->num_rows >0) {
    # Imprimimos la cabeza de la tabla
    echo $thead;
    while ($row=$eje->fetch_row()) {
      # Trae Todas las Coincidencias
      echo '
      <form id="modregional" method="post">
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

  $qry="SELECT * FROM TipoUsua";
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
