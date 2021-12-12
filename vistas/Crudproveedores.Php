<?php

include_once 'Db.php';

/* Codigo para Insertar Datos */
if(isset($_POST['guardar']))
{
		
	 echo "Guardandoooooooooooooooooooo";
     $nombre = $MySQLiconn->real_escape_string($_POST['nombre']);
     $apellido = $MySQLiconn->real_escape_string($_POST['apellido']);
 	   $empresa = $MySQLiconn->real_escape_string($_POST['empresa']);
     $telefono = $MySQLiconn->real_escape_string($_POST['telefono']);
     $rfc_Cliente = $MySQLiconn->real_escape_string($_POST['rfc_decliente']);
 	  


  $SQL = $MySQLiconn->query("INSERT INTO proveedores (nombre, apellido, empresa, telefono, rfc_decliente) VALUES('$nombre','$apellido','$empresa','$telefono', '$rfc_decliente')");
  
  if(!$SQL)
  {
   echo $MySQLiconn->error;
  } 
  header("Location:proveedores.php");
}

/* Codigo para eliminar Datos */
if(isset($_GET['eliminar']))
{
 $SQL = $MySQLiconn->query("DELETE FROM proveedores WHERE id=".$_GET['eliminar']);
 header("Location:proveedores.php");
}


/* Codigo para Editar Datos */
if(isset($_GET['editar']))
{

 $SQL = $MySQLiconn->query("SELECT * FROM proveedores WHERE id=".$_GET['editar']);
 $getROW = $SQL->fetch_array();
}

/* Codigo para Actualizar Datos */
if(isset($_POST['actualizar']))
{
 $SQL = $MySQLiconn->query(
                          "UPDATE proveedores SET nombre='" 
                          . $_POST['nombre']
                          . "', apellido='"
                          . $_POST['apellido']
                          . "', empresa='"
                          . $_POST['empresa']
                          ."', telefono='" 
                          . $_POST['telefono']
                          ."', rfc_decliente='" 
                          . $_POST['rfc_decliente']
                          . "' WHERE id="
                          . $_GET['editar']);

 header("Location:proveedores.php");
}

?>
