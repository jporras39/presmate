<?php
#Archivo para la conexion al servidor y a la base de datos:
$host="127.0.0.1";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="presmate";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('No se Puede Conectar al Servidor; Codigo del Error: ' . mysqli_connect_error());
$acento= $con->query("SET NAMES 'utf8'");
//$con->close();
 ?>
