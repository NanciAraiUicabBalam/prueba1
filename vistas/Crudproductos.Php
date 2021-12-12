<?php

include_once 'Db.php';

/* Codigo para Insertar Datos */
if(isset($_POST['guardar']))
{
		
	 echo "Guardando";
     $Nombre = $MySQLiconn->real_escape_string($_POST['Nombre']);
     $Marca = $MySQLiconn->real_escape_string($_POST['Marca']);
 	   $Peso = $MySQLiconn->real_escape_string($_POST['Peso']);
     $Costo = $MySQLiconn->real_escape_string($_POST['Costo']);
     $Codigo_Barra = $MySQLiconn->real_escape_string($_POST['Codigo_Barra']);
     $existencias = $MySQLiconn->real_escape_string($_POST['existencias']);
 	   $fecha_caducidad = $MySQLiconn->real_escape_string($_POST['fecha_caducidad']);


  $SQL = $MySQLiconn->query("INSERT INTO productos (Nombre, Marca, Peso, Costo, Codigo_Barra, existencias, fecha_caducidad) VALUES('$Nombre','$Marca','$Peso','$Costo', '$Codigo_Barra', '$existencias', '$fecha_caducidad')");
  
  if(!$SQL)
  {
   echo $MySQLiconn->error;
  } 
  header("Location:productos.php");
}

/* Codigo para eliminar Datos */
if(isset($_GET['eliminar']))
{
 $SQL = $MySQLiconn->query("DELETE FROM productos WHERE idProducto=".$_GET['eliminar']);
 header("Location:productos.php");
}


/* Codigo para Editar Datos */
if(isset($_GET['editar']))
{

 $SQL = $MySQLiconn->query("SELECT * FROM productos WHERE idProducto=".$_GET['editar']);
 $getROW = $SQL->fetch_array();
}

/* Codigo para Actualizar Datos */
if(isset($_POST['actualizar']))
{
 $SQL = $MySQLiconn->query(
                          "UPDATE productos SET Nombre='" 
                          . $_POST['Nombre']
                          . "', Marca='"
                          . $_POST['Marca']
                          . "', Peso='"
                          . $_POST['Peso']
                          ."', Costo='" 
                          . $_POST['Costo']
                          ."', Codigo_Barra='" 
                          . $_POST['Codigo_Barra']
                          ."', existencias='" 
                          . $_POST['existencias']
                          ."', fecha_caducidad='" 
                          . $_POST['fecha_caducidad']
                          . "' WHERE idProducto="
                          . $_GET['editar']);

 header("Location:productos.php");
}

?>
