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
    <meta charset="UTF-8">
    <title>Control Sales | Documentos</title>
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
        <script type="text/javascript">

      function crear_query()
      {
        var sql='select * from v_documentos where 1>0';
        
        var  a = document.getElementById('text_detalle').value;
        //alert("Cojio el valor"); 
        if (a != ''){

          sql=sql+' AND detalle iLIKE %'+comillas(a)+"%"; 
        }

         var  a = document.getElementById('fecha_documento').value;
        //alert("Cojio el valor"); 
        if (a != ''){

          sql=sql+' and f_fecha='+comillas(a); 
        }

        var  a = document.getElementById('text_empresa').value;
        //alert("Cojio el valor"); 
        if (a != ''){

          sql=sql+' and id_empresa='+a; 
        }

        var  a = document.getElementById('text_servicio').value;
        //alert("Cojio el valor"); 
        if (a != ''){

          sql=sql+' and id_servicio='+a; 
        }

        
        alert(sql);

      }

      function comillas(valor)
      {
        var res="'"+valor+"'";
        return res;
      }

    </script>
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
              Registro de Documentos
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
        <div class="col-md-12">
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
                      <label for="exampleInputEmail1">Detalle Documento</label>
                      <input type="email" class="form-control" id="text_detalle" placeholder="Detalle">
                  </div>

                        <div class="form-group">
                          <label>Fecha Documento</label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input id="fecha_documento" name="campo_fecha" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask />
                          </div><!-- /.input group -->
                       </div><!-- /.form group -->
                  
                </div><!-- /.col -->
                <div class="col-md-6">


                       <div class="form-group">
                        <label for="exampleInputEmail1">Empresa</label>
                          <select class="form-control select" name="campo_empresa" id="text_empresa">
                            <option selected="selected"></option>
                            <?php 
                               if($connect)
                                  {
                                       $sql="select * from t_empresas";
                                       $res=pg_query($connect, $sql) or die("Error en la consulta SQL");
                                       //$row = pg_fetch_array($res); //Para mostrar todos los regisros quitar esta linea
                                       if($res)
                                       { 
                                          while($row = pg_fetch_array($res))
                                          {
                                            echo'<OPTION VALUE="'.$row['f_id'].'">'.$row['f_descripcion'].'</OPTION>';
                                          }
                                       }    
                                  }
                            ?>
                          </select>
                        </div> 


                        <div class="form-group">
                        <label for="exampleInputEmail1">Servicio</label>
                          <select class="form-control select" name="campo_servicio" id="text_servicio">
                            <option selected="selected"></option>
                            <?php 
                               if($connect)
                                  {
                                       $sql="select * from t_servicios";
                                       $res=pg_query($connect, $sql) or die("Error en la consulta SQL");
                                       $row = pg_fetch_array($res);
                                       if($res)
                                       { 

                                          while($row = pg_fetch_array($res))
                                          {
                                            echo'<OPTION VALUE="'.$row['f_id'].'">'.$row['f_descripcion'].'</OPTION>';
                                          }
                                       }    
                                  }
                            ?>
                          </select>
                        </div> 
                </div><!-- /.col -->

                 <div class="col-md-6 col-lg-3">
                 <div class="form-group">
                    <!-- <button class="btn btn-block btn-info">Buscar</button> -->
                  </div>
                </div>

                <div class="col-md-6 col-lg-3">
                 <div class="form-group">
                    <!-- <button class="btn btn-block btn-info">Buscar</button> -->
                  </div>
                </div><!--  -->
      
                <div class="col-md-6 col-lg-3">
                 <div class="form-group">
                    <button class="btn btn-block btn-info" onclick="crear_query()">Buscar</button>
                  </div>
                </div>

                <div class="col-md-6 col-lg-3">
                 <div class="form-group">
                  <form action='in_documentos.php'>
                         <button class="btn btn-block btn-info">Crear</button>
                  </form>  
                </div>
                </div>

            
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                           <th>ID Documento </th>
                            <th>Detalle</th>
                            <th>Fecha</th>
                            <th>Monto</th>
                            <th>Balance</th>
                            <th>Monto Pagado</th>
                            <th>Empresa</th>
                            <th>Servicio</th>
                            <th>Estado</th>
                    </tr>

                       <?php 

                        if ($administrador=="true")
                          {
                             
                            $sql="select * from v_pagados_balance";
                          }
                          else
                          { 
                           
                           $sql="select * from v_pagados_balance where f_id_usuario=".$usuario;
                          }
                               if($connect)
                                  {
                                       $res=pg_query($connect, $sql) or die("Error en la consulta SQL");
                                       $row = pg_fetch_array($res);
                                       if($res)
                                       { 
                                          //while($row = pg_fetch_array($res))
                                          for ($i=0; $row = pg_fetch_array($res); $i++)  
                                          {
                                            echo "<tr>";
                                               echo "<td>".$row['id_documento']."</td>";
                                               echo "<td>".$row['detalle']."</td>";  
                                               echo "<td>".$row['f_fecha']."</td>";  
                                               echo "<td>".$row['f_monto']."</td>";
                                               echo "<td>".$row['f_balance']."</td>";
                                               echo "<td>".$row['monto_pagado']."</td>";
                                               echo "<td>".$row['empresa']."</td>";
                                               echo "<td>".$row['servicio']."</td>";
                                              // echo "<td>".$row['servicio']."</td>";
                                               if ($row['f_estatus']==t)
                                               {
                                                //echo "<td>"."HOla"."</td>";
                                                echo '<td><span class="label label-success">Pagado</td>';
                                               }
                                               else
                                               {
                                                echo '<td><span class="label label-danger">Pendiente</td>';
                                               }
                                            echo "</tr>";
                                          }
                                       } 
                                  }
                            ?>    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>

            <div class="col-md-2">
            </div>

            </div>
          
            </div><!-- /.row -->

             

              </div>


      </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!-- Aqui se incluye el archivo php para el footer -->
      <?php include '../include/footer-comun.php' ?> 
      <!-- Aqui se incluye el archivo php para los modales -->
      <?php include '../include/modales-comun.php' ?>   
    </div><!-- ./wrapper -->

     <script src="../plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- Select2 -->
    <script src="../plugins/select2/select2.full.min.js" type="text/javascript"></script>
    <!-- InputMask -->
    <script src="../plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="../plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="../plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
    <!-- date-range-picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- bootstrap color picker -->
    <script src="../plugins/colorpicker/bootstrap-colorpicker.min.js" type="text/javascript"></script>
    <!-- bootstrap time picker -->
    <script src="../plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- iCheck 1.0.1 -->
    <script src="../plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js" type="text/javascript"></script>




      <script type="text/javascript">
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();

        //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        //Datemask2 mm/dd/yyyy
        $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
        //Money Euro
        $("[data-mask]").inputmask();

        //Date range picker
        $('#reservation').daterangepicker();
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
        //Date range as a button
        $('#daterange-btn').daterangepicker(
                {
                  ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                  },
                  startDate: moment().subtract(29, 'days'),
                  endDate: moment()
                },
        function (start, end) {
          $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
        );

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-blue',
          radioClass: 'iradio_minimal-blue'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

        //Colorpicker
        $(".my-colorpicker1").colorpicker();
        //color picker with addon
        $(".my-colorpicker2").colorpicker();

        //Timepicker
        $(".timepicker").timepicker({
          showInputs: false
        });
      });
    </script>

  </body>
</html>
