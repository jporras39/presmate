<?php
/////// CONEXIÓN A LA BASE DE DATOS /////////
include("../../../../control/conex.php");
//////////////// VALORES INICIALES ///////////////////////
session_start();

if(isset($_POST['solicitudes'])){

  $ficha=$_POST['solicitudes'];
  $usuario='98670692';/////// ESTE DATO DEBE CAPTURARSE DE UNA VARIABLE DE SESSION ///////////
  $datos="";
  $query='select concat(u.nombres," ",u.apellidos) as instructor, p.nombprog as programa, p.idPrograma as codigoPrograma, p.Version as version
  from programa as p
  inner join detaprog as d on p.idPrograma =d.idPrograma
  inner join usuarios as u on d.idUsuario =u.idUsuario
  where u.idUsuario="'.$usuario.'"and d.Ficha="'.$ficha.'";';

  ///////// LO QUE OCURRE AL TECLEAR SOBRE EL INPUT DE BUSQUEDA ////////////

  $buscarPrograma=$con->query($query);
  if ($buscarPrograma->num_rows>0)
  {
    $filaPrograma=$buscarPrograma->fetch_array();
    $datos.=
    '<p>Programa: '.$filaPrograma[1].'</p>
    <p>Código: '.$filaPrograma[2].'</p>
    <p>Version: '.$filaPrograma[3].'</p>
    <p>Instructor: '.$filaPrograma[0].'</p>';

$_SESSION['programa']=$filaPrograma[1];
$_SESSION['codigop']=$filaPrograma[2];
$_SESSION['versionp']=$filaPrograma[3];
$_SESSION['nomins']=$filaPrograma[0];

  } else{
    $datos="No se encontraron coincidencias con sus criterios de búsqueda.";
  }
}else{
  $datos='digite el numero de ficha que desea buscar';
}
echo $datos;
?>
