<?php

include_once 'Db.php';

/* Codigo para Insertar Datos */
if(isset($_POST['guardar']))
{
		
	 echo "Guardando";
     $idProducto= $MySQLiconn->real_escape_string($_POST['idProducto']);
     $cantidad = $MySQLiconn->real_escape_string($_POST['cantidad']);
 	   $precio = $MySQLiconn->real_escape_string($_POST['precio']);
     $subtotal = $MySQLiconn->real_escape_string($_POST['subtotal']);
     $total = $MySQLiconn->real_escape_string($_POST['total']);
     $usuario = $MySQLiconn->real_escape_string($_POST['usuario']);
 	   $fecha = $MySQLiconn->real_escape_string($_POST['fecha']);
     

  $SQL = $MySQLiconn->query("INSERT INTO venta (idProducto,cantidad, precio, subtotal, total, usuario, fecha) VALUES('$idProducto', '$cantidad','$precio','$subtotal','$total', '$usuario', '$fecha')");
  
  if(!$SQL)
  {
   echo $MySQLiconn->error;
  } 
  header("Location:venta.php");
}

/* Codigo para eliminar Datos */
if(isset($_GET['eliminar']))
{
 $SQL = $MySQLiconn->query("DELETE FROM venta WHERE id=".$_GET['eliminar']);
 header("Location:venta.php");
}


/* Codigo para Editar Datos */
if(isset($_GET['editar']))
{

 $SQL = $MySQLiconn->query("SELECT * FROM venta WHERE id=".$_GET['editar']);
 $getROW = $SQL->fetch_array();
}

/* Codigo para Actualizar Datos */
if(isset($_POST['actualizar']))
{
 $SQL = $MySQLiconn->query(
                          "UPDATE venta SET idProducto='" 
                          . $_POST['idProducto']
                          . "', cantidad='"
                          . $_POST['cantidad']
                          . "', precio='"
                          . $_POST['precio']
                          . "', subtotal='"
                          . $_POST['subtotal']
                          ."', total='" 
                          . $_POST['total']
                          ."', usuario ='" 
                          . $_POST['usuario']
                          ."', fecha='" 
                          . $_POST['fecha']
                          . "' WHERE id="
                          . $_GET['editar']);

 header("Location:venta.php");
}

?>
