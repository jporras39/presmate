<?php
include('../../../control/conex.php');
header('Content-Type: text/html; charset=UTF-8');


$items1 = ($_POST['selrubro']);
$items2 = ($_POST['addvalor']);
#$items.....n
do {
        //// RECUPERAR LOS VALORES DE LOS ARREGLOS ////////
        $item1 = current($items1);
        $item2 = current($items2);

        ////// ASIGNARLOS A VARIABLES ///////////
        $srubro=(( $item1 !== false) ? $item1 : ", &nbsp;");
        $avalor=(( $item2 !== false) ? $item2 : ", &nbsp;");

        $sql="INSERT INTO Tabla VALUES('','','')";
        $eje=$con->query($sql);

        // Tomar el valor siguiente:
        $item1 = next( $items1 );
        $item2 = next( $items2 );

        // Tomar y Terminar
      }while($item1 !== false && $item2 !== false);


?>
