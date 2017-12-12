<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////
include("../../../../control/conex.php");
//////////////// VALORES INICIALES ///////////////////////
$tabla="";
$query="SELECT numetran,instructor,totatran, estatran FROM solipend order by numetran;";
///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////
if(isset($_POST['solicitudes']))
{
  $b=$con->real_escape_string($_POST['solicitudes']);
  $query="SELECT numetran, instructor, totatran, estatran
  FROM solipend
  where
  numetran like '%".$b."%'  or
  instructor like '%".$b."%'or
  totatran like '%".$b."%' or
  estatran like '%".$b."%'
  order by numetran;";
}
$buscarSolicitud=$con->query($query);
if ($buscarSolicitud->num_rows>0)
{
  $tabla.=
  '  <table class="table table-striped">
  <thead class="bg-dark text-light">
  <tr>
  <th scope="col">Solicitud #</th>
  <th scope="col">Instructor</th>
  <th scope="col">Estimado</th>
  <th scope="col">Estado</th>
  </tr>
  </thead>
  <tbody>';
  while($filaSolicitud=$buscarSolicitud->fetch_array())
  {
    $tabla.=
    "  <tr>
    <th scope='row'>".$filaSolicitud[0]."</th>
    <td>".$filaSolicitud[1]."</td>
    <td>".$filaSolicitud[2]."</td>
    <td>".$filaSolicitud[3]."</td>
    </tr>";
    /*<td><a href='modificar.php?id=".$filaSolicitud[0]."'><img src='../img/editar.png' style='width:50px; height:50px'></a></td>
    <td><a href='#' onclick='confirmar(".$filaSolicitud[0].")'><img src='../img/prohibido.png' style='width:50px; height:50px'></a></td>";*/
  }
  $tabla.='</table>';
} else{
  $tabla="No se encontraron coincidencias con sus criterios de búsqueda.";
}
echo $tabla;
?>
