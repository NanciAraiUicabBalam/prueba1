<?php

include_once 'Db.php';

/* Codigo para Insertar Datos */
if(isset($_POST['guardar']))
{
		
	 echo "Guardando";
     $id_producto = $MySQLiconn->real_escape_string($_POST['idProducto']);
     $cantidad = $MySQLiconn->real_escape_string($_POST['cantidad']);
 	   $precio = $MySQLiconn->real_escape_string($_POST['precio']);
     $usuario = $MySQLiconn->real_escape_string($_POST['usuario']);
     $fecha = $MySQLiconn->real_escape_string($_POST['fecha']);



  $SQL = $MySQLiconn->query("INSERT INTO devoluciones (idProducto, cantidad, precio, usuario, fecha) VALUES('$id_producto','$cantidad','$precio','$usuario', '$fecha')");
  
  if(!$SQL)
  {
   echo $MySQLiconn->error;
  } 
  header("Location:devoluciones.php");
}

/* Codigo para eliminar Datos */
if(isset($_GET['eliminar']))
{
 $SQL = $MySQLiconn->query("DELETE FROM devoluciones WHERE id=".$_GET['eliminar']);
 header("Location:devoluciones.php");
}


/* Codigo para Editar Datos */
if(isset($_GET['editar']))
{

 $SQL = $MySQLiconn->query("SELECT * FROM devoluciones WHERE id=".$_GET['editar']);
 $getROW = $SQL->fetch_array();
}

/* Codigo para Actualizar Datos */
if(isset($_POST['actualizar']))
{
 $SQL = $MySQLiconn->query(
                          "UPDATE devoluciones SET idProducto='" 
                          . $_POST['idProducto']
                          . "',cantidad='"
                          . $_POST['cantidad']
                          . "', precio='"
                          . $_POST['precio']
                          ."', usuario='" 
                          . $_POST['usuario']
                          ."', fecha='" 
                          . $_POST['fecha']
                          . "' WHERE id="
                          . $_GET['editar']);

 header("Location:devoluciones.php");
}

?>
, , , , 