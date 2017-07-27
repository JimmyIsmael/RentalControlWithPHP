<!DOCTYPE html>
  <?php
        session_start();
        if($_SESSION["estado"]!="OK"){
          header("location:../../AdminLTE-2.2.0/login.php");}
        include '../funciones_PHP/conexion.php';
        $estado=$_SESSION['estado'];
        $nombre=$_SESSION['nombre'];
       // $apellido=$_SESSION['apellido'];
        $email=$_SESSION['email'];
        $password=$_SESSION['password'];
       // $puesto=$_SESSION['puesto'];
        $consulta=$_SESSION['consulta'];
        $administrador=$_SESSION['administrador'];
        $usuario=$_SESSION['id'];
        $mensaje='';

         //validar que tipo de menu usara el usuario, se hace aqui porque es una opcion comun para ambos tipos usuarios
       
        if ($administrador=="true")
        {
          include '../include/menu-comun-formularios.php';
        }
        else
        { 
          include '../include/menu_comun_usuario.php';
        }
        
      
  ?>
<html>
  <head>
    </script>
    <meta charset="UTF-8">
    <title>FinancialControl | Banking</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue sidebar-mini">
    <!-- Site wrapper -->
  <div class="wrapper">
      <?php include '../include/barra-superior-comun-formularios.php' ?> <!-- Dentro de este include estan las variables de sesion -->
        <!-- Aqui se incluye el archivo php para la de navegacion lateral (menu) -->
        <!-- Content Wrapper. Contains page content -->
       <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Banking
          </h1>
        </section>
        
         <section class="content">
    <div class="row">       
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Documentos Pagados</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
            <div class="row">
            <div class="col-md-12">
            <div class="box">
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
              <tr>
               <th>ID Documento </th>
                      <th>Detalle</th>
                      <th>Fecha</th>
                      <th>Monto</th>
                      <th>Empresa</th>
                      <th>Servicio</th>
                      <th>Estado</th>
              </tr>
               <?php 
                               if($connect)
                                  {
                                       $sql="select * from v_documentos where f_id_usuario='$usuario'";                                       
                                       $res=pg_query($connect, $sql) or die("Error en la consulta SQL");
                                       //$row = pg_fetch_array($res);
                                       if($res)
                                       { 
                                          //while($row = pg_fetch_array($res))
                                          for ($i=0; $row = pg_fetch_array($res); $i++)  
                                          {
                                            //echo'<OPTION VALUE="'.$row['f_id'].'">'.$row['f_descripcion'].'</OPTION>';
                                            echo "<tr>";
                                               echo "<td>".$row['id_documento']."</td>";
                                               echo "<td>".$row['detalle']."</td>";  
                                               echo "<td>".$row['f_fecha']."</td>";  
                                               echo "<td>".$row['f_monto']."</td>";
                                               echo "<td>".$row['empresa']."</td>";
                                               echo "<td>".$row['servicio']."</td>";
                                               echo '<td><span class="label label-success">Pagado</td>';

                                               //<td><span class="label label-success">Approved</span></td>
                                            echo "</tr>";
                                          }
                                          
                                       }
                                  }
                        ?>  
              </table>
            </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div>
          </div>
         </div>
          </div>
          </div>
         </div><!-- /.row -->

      <div class="row">       
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Documentos Pendientes</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
            <div class="row">
            <div class="col-md-12">
            <div class="box">
            <div class="box-body table-responsive no-padding">
               <table class="table table-hover">
                    <tr>
                      <th>ID Documento </th>
                      <th>Detalle</th>
                      <th>Fecha</th>
                      <th>Monto</th>
                      <th>Empresa</th>
                      <th>Servicio</th>
                      <th>Estado</th>
                    </tr>
                        <?php 
                               if($connect)
                                  {
                                       $sql="select * from v_documentos_sin_pagar where f_id_usuario='$usuario'";                                       
                                       $res=pg_query($connect, $sql) or die("Error en la consulta SQL");
                                       //$row = pg_fetch_array($res);
                                       if($res)
                                       { 
                                          //while($row = pg_fetch_array($res))
                                          for ($i=0; $row = pg_fetch_array($res); $i++)  
                                          {
                                            //echo'<OPTION VALUE="'.$row['f_id'].'">'.$row['f_descripcion'].'</OPTION>';
                                            echo "<tr>";
                                               echo "<td>".$row['id_documento']."</td>";
                                               echo "<td>".$row['detalle']."</td>";  
                                               echo "<td>".$row['f_fecha']."</td>";  
                                               echo "<td>".$row['f_monto']."</td>";
                                               echo "<td>".$row['empresa']."</td>";
                                               echo "<td>".$row['servicio']."</td>";
                                               echo '<td><span class="label label-danger">Pendiente</td>';

                                               //<td><span class="label label-success">Approved</span></td>
                                            echo "</tr>";
                                          }
                                          
                                       }
                                  }
                        ?>  
                  </table>
            </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div>
          </div>
         </div>
          </div>
          </div>
         </div><!-- /.row -->

         <div class="row">       
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Servicios Programados</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
            <div class="row">
            <div class="col-md-12">
            <div class="box">
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
              <tr>
                <th>ID</th>
                <th>Detalle</th>
                <th>Fecha</th>
                <th>Empresa</th>
                <th>Monto</th>
              </tr>
              
              </table>
            </div><!-- /.box-body -->
            </div><!-- /.box -->
          </div>
          </div>
         </div>
          </div>
          </div>
         </div><!-- /.row -->

         </section>
        
       </div>
    <!-- Aqui se incluye el archivo php para el footer -->
    <?php include '../include/footer-comun.php' ?> 
    <!-- Aqui se incluye el archivo php para los modales -->
    <?php include '../include/modales-comun.php' ?>   
    </div><!-- ./wrapper -->


    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>
