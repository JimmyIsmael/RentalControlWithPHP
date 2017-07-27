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
        $mensaje='';
        $id_user=$_SESSION['id_user'];
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

<script>


      function mostrarInfo(){

         var where='where 1>0 ';

         if (document.getElementById('text_nombre').value!='')
          where=where+"AND u.f_nombre ilike '%"+document.getElementById('text_nombre').value+"%'";

        if (document.getElementById('text_nombre_usuario').value!='')
          where=where+"AND u.f_correo ilike '%"+document.getElementById('text_nombre_usuario').value+"%'";

        if (document.getElementById('text_apellido').value!='')
          where=where+"AND u.f_nombre ilike '%"+document.getElementById('text_apellido').value+"%'";

          var sql='select * from t_usuarios u '+where+' order by f_id_usuario';


      if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
      }
      else
      {// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
      document.getElementById("datos").innerHTML=xmlhttp.responseText;
      }else{ 
      document.getElementById("datos").innerHTML='Cargando...';
      }
      }
      xmlhttp.open("POST","../funciones_PHP/consulta_usuarios.php",true);
      xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
      xmlhttp.send("sql="+sql);

      }

</script>


    <meta charset="UTF-8">
    <title>Alquimia | Usuarios</title>
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
              Registro de Usuarios
          </h1>
         
        </section>

        <!-- Main content -->
        <section class="content">

                 <!-- SELECT2 EXAMPLE -->
         <!--    <div class="col-md-4">
            </div> -->
        <div class="row">    
        <div class="col-md-2">
            </div>    
        <div class="col-md-8">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Datos Busqueda</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body">
              <div class="row">

                <div class="col-md-6">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Nombre</label>
                      <input type="email" class="form-control" id="text_nombre" placeholder="Nombre">
                  </div>

                  <div class="form-group">
                      <label for="exampleInputEmail1">Nombre Usuario</label>
                      <input type="email" class="form-control" id="text_nombre_usuario" placeholder="Nombre Usuario">
                  </div>
                  
                </div><!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Apellido</label>
                      <input type="email" class="form-control" id="text_apellido" placeholder="Apellido">
                  </div>
                  
                 <div class="form-group">
                    <label>Tipo Usuarios</label>
                    <select class="form-control select2">
                      <option selected="selected">Eventuales</option>
                      <option>Regulares</option>
                      <option disabled="disabled">California (disabled)</option>
                      <option>VIP</option>
                      <option>Gold</option>
                    </select>
                  </div>  

                </div><!-- /.col -->

            <div class="form-group">
                 <div class="col-md-6 col-lg-3">
                 </div>
                 <div class="col-md-6 col-lg-3">
                 </div>
                 <div class="col-md-6 col-lg-3">
                 <div class="form-group">
                    <button class="btn btn-block btn-info" onClick="mostrarInfo()">Buscar</button>
                  </div>
                </div>

                <div class="col-md-6 col-lg-3">
                 <div class="form-group">
                  <form action='in_usuarios.php'>
                         <button class="btn btn-block btn-info">Crear</button>
                  </form>  
                </div>
                </div>
            </div>


               
    
              <div class="col-xs-12">
              <div class="box">
               <!--  <div class="box-header">
                  <h3 class="box-title">Responsive Hover Table</h3>
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search" />
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div> --><!-- /.box-header -->
               
               <div id="datos"></div>

                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>

            <div class="col-md-2">
            </div>

            </div>
          
            </div><!-- /.row -->

             

              </div>
              </div>
              </div>


      </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
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
