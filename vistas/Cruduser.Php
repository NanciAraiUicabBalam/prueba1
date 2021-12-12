<?php

include_once 'Db.php';

/* Codigo para Insertar Datos */
if(isset($_POST['guardar']))
{
		
	 echo "Guardandoooooooooooooooooooo";
     $nombre = $MySQLiconn->real_escape_string($_POST['nombre']);
     $correo = $MySQLiconn->real_escape_string($_POST['correo']);
 	   $password= $MySQLiconn->real_escape_string($_POST['password']);
     $fecha_creacion = $MySQLiconn->real_escape_string($_POST['fecha_creacion']);
     $Rol= $MySQLiconn->real_escape_string($_POST['Rol']);
     

  $SQL = $MySQLiconn->query("INSERT INTO usuario (nombre, correo, password, fecha_creacion, Rol_idRol) VALUES('$nombre','$correo','$password','$fecha_creacion', '$Rol')");
  
  if(!$SQL)
  {
   echo $MySQLiconn->error;
  } 
  header("Location:user.php");
}

/* Codigo para eliminar Datos */
if(isset($_GET['eliminar']))
{
 $SQL = $MySQLiconn->query("DELETE FROM usuario WHERE idUsuario=".$_GET['eliminar']);
 header("Location:user.php");
}


/* Codigo para Editar Datos */
if(isset($_GET['editar']))
{

 $SQL = $MySQLiconn->query("SELECT * FROM usuario WHERE idUsuario=".$_GET['editar']);
 $getROW = $SQL->fetch_array();
}

/* Codigo para Actualizar Datos */
if(isset($_POST['actualizar']))
{
 $SQL = $MySQLiconn->query(
                          "UPDATE usuario SET nombre='" 
                          . $_POST['nombre']
                          . "', correo='"
                          . $_POST['correo']
                          . "', password='"
                          . $_POST['password']
                          ."', fecha_creacion='" 
                          . $_POST['fecha_creacion']
                          ."', Rol_idRol='" 
                          . $_POST['Rol']
                          . "' WHERE idUsuario="
                          . $_GET['editar']);

 header("Location:user.php");
}

?>
