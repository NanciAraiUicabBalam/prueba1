<?php
include_once '../cruddevoluciones.php';
?>
<?php
session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: ../../index.php");

}
?>
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Productos</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="../assets/vendor/datatables/css/fixedHeader.bootstrap4.css">

    
  
  
</head>

<body>
   <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="../pag_inicio.php">SISTEMA DE INVENTARIOS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" 
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                    aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li>
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" id="navbarDropdownMenuLink1"
                              aria-haspopup="true" aria-expanded="false "  href="user.php">Usuarios
                             <i class="fas fa-user"></i></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown"></ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link"   id="navbarDropdown" 
                           aria-haspopup="true" aria-expanded="false" href="../../bd/logout.php">Cerrar Sesion
                            <span class="fas fa-sign-out-alt"></span> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- Menu-->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-fw fa-table"></i>Registos <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <li class="nav-item">
                                                <a class="nav-link" href="productos.php">Productos</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="proveedores.php">Proveedores</a>
                                            </li>
                                          
                                        </li>
                                       
                                       
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" 
                                data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Movimientos</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="venta.php">Ventas<span class="badge badge-secondary"></span></a>
                                        </li>
                                        <li class="nav-item">
                                        <a class="nav-link" href="devoluciones.php">Devoluciones<span class="badge badge-secondary"></span></a>
                                        </li>
                                       
                                    </ul>
                                </div>
                            </li>
                                                     
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->






        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                         
                                                        
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- ============================================================== -->
                    <!-- basic table  -->
                    <!-- ============================================================== -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Registro de las devoluciones</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped ">
                                    <div class="container-fluid ">
  

 
 
   <table class="table table-hover table-bordered shadow p-3 mb-5 bg-light rounded ">
      <tr>
      <th>ID </th>
         <th>ID Producto</th>
         <th>Cantidad</th>
         <th>Precio</th>
         <th>Usuario</th>
         <th>Fecha</th>  
         <th>Acciones</th> 
            
      </tr>
  
      <?php
       $res = $MySQLiconn->query("SELECT * FROM devoluciones ");
        while($row=$res->fetch_array())
        {
      ?>
         <tr>
           <td> <?php echo $row['id']; ?> </td>
           <td> <?php echo $row['idProducto']; ?> </td>
           <td> <?php echo $row['cantidad']; ?> </td>
           <td> <?php echo $row['precio']; ?> </td>
           <td> <?php echo $row['usuario']; ?> </td>
           <td> <?php echo $row['fecha']; ?> </td>
      
           <td>
             <a href="?editar=<?php echo $row['id']; ?>" onclick="return confirm('??Deseas Editarlo ?'); ">
             <i class="fas fa-fw fa-pencil-alt"></i> 
            </a>
  
             <a href="?eliminar=<?php echo $row['id']; ?>" onclick="return confirm('??Seguro deseas eliminarlo?'); ">
             <i class="fas fa-fw fa-trash-alt"></i> 
             </a>
  
             <a href="?imprimir=<?php echo $row['id']; ?>" onclick="return confirm('??Deseas Imprimir ?'); ">
  
             <i class="fas fa-print"></i>
  
             </a>
           </td> 
         </tr>
         <?php
     }
     ?>
   </table>
   <h2 class="text-center">Realizar una devolucion</h2>
   <form method="post">
  <div class="form-row">
    <div class="form-group col-md-8">
      <label for="idProducto" >ID Producto</label>
      <input type="text" class="form-control" id="idProducto"name="idProducto"  required
             value="<?php
                        if(isset($_GET['editar']))
                          echo $getROW['idProducto'];   ?>" />
      
    </div>
 
      
 <div class="form-group col-md-2">
      <label for="cantidad">Cantidad</label>
      <input type="text" class="form-control" id="cantidad" name="cantidad" 
      required value="<?php if(isset($_GET['editar'])) echo $getROW['cantidad'];  ?>"  />
    </div>
 

    <div class="form-group col-md-2">
      <label for="precio">Precio</label>
    <input type="text" class="form-control"  id="precio" name="precio" 
    required value="<?php if(isset($_GET['editar'])) echo $getROW['precio'];  ?>" />
  </div>
  </div>

  <div class="form-row">
    <div class="form-group col-md-2">
      <label for="usuario" >Usuario</label>
      <input type="text" class="form-control"  id="usuario" name="usuario" 
      required value="<?php if(isset($_GET['editar'])) echo $getROW['usuario'];  ?>"  />
    </div>

    <div class="form-group col-md-6">
      <label for="fecha">Fecha</label>
      <input type="text" class="form-control" id="fecha" name="fecha"
      required value="<?php if(isset($_GET['editar'])) echo $getROW['fecha'];  ?>"  />
    </div>
    
    

   
    
      </div>
      
  
      <div class="row justify-content-center ">
      <div class="form-group">	      
         <?php
          if(isset($_GET['editar']))
           {
         ?>
            <div class="col-12">
              <button type="submit" class="btn btn-primary" name="actualizar">Actualizar</button>
            </div>
        <?php
           }
           else
           {
        ?>
        <div class="col-12">			 
          <button type="submit" class="btn btn-primary" name="guardar">Guardar</button>
        </div>
        <?php
       }
       ?>	      
      </div>
      </div> 
   </form>
  
   </div></div>
                                                                               
                                        
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end basic table  -->
                    <!-- ============================================================== -->
                
            
            
              
             
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- footer -->
    
            <div class="footer">
                
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright ??  Nanci U.B. - Cristina M.O. - Beatriz C.C.</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                
                            </div>
                        </div>
                        </div> 
                </div>
            </div>
         
         
            <!-- end footer -->
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="../assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="../assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="../assets/libs/js/main-js.js"></script>
    
    <script src="../assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
   
    <script src="../assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    
</body>
 
</html>
<?php 
   