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
    <title>Control Sales | Clientes</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- daterange picker -->
    <link href="../plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="../plugins/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap Color Picker -->
    <link href="../plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap time Picker -->
    <link href="../plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Select2 -->
    <link href="../plugins/select2/select2.min.css" rel="stylesheet" type="text/css" />
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
              Registro de Clientes
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
          </ol>
        </section>

        <!-- Main content -->
      <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Entrada de Clientes</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form">
                  <div class="box-body">

                    <div class="row">

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Codigo</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="ID Ciente">
                        </div>
                      </div>

                      <div class="col-md-3">
                      </div>

                      <div class="col-md-3">
                      </div>
                      <div class="col-md-3">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nombre</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Apellido</label>
                          <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Apellido">
                        </div>
                      </div>

                      <div class="col-md-3">
                         <div class="form-group">
                          <label>Cedula</label>
                          <div class="input-group">
                          
                            <input type="text" class="form-control" data-inputmask='"mask": "999-9999999-9"' data-mask 
                            placeholder="###-#######-#"/>
                          </div><!-- /.input group -->
                        </div><!-- /.form group -->
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          
                      </div><!-- /.form group -->
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Nacimiento</label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask
                            placeholder="dd/mm/yyyy" />
                          </div><!-- /.input group -->
                      </div><!-- /.form group -->
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Balance</label>
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                            <input type="text" class="form-control" placeholder="Balance" />
                          </div><!-- /.input group -->
                      </div><!-- /.form group -->
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Limite Credito</label>
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                            <input type="text" class="form-control" placeholder="Balance" />
                          </div><!-- /.input group -->
                      </div><!-- /.form group -->
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <label>Dias Credito</label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-clock-o"></i>
                            </div>
                            <input type="text" class="form-control"  placeholder="Dias Credito" />
                          </div><!-- /.input group -->
                      </div><!-- /.form group -->
                      </div>
                    </div>

                    <div class="row">

                      <div class="col-md-6">
                       <div class="form-group">
                        <label>Telefono Local</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                          </div>
                          <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask />
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                      </div>

                      <div class="col-md-6">
                      <div class="form-group">
                        <label>Telefono Celular</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                          </div>
                          <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask />
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                      </div>

                    </div>

                    <div class="row">

                      <div class="col-md-6">
                       <div class="form-group">
                        <label>FAX</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                          </div>
                          <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask />
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                      </div>

                      <div class="col-md-6">
                      <div class="form-group">
                        <label>Email</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                          </div>
                          <input type="text" class="form-control"/>
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                      </div>
                    </div>

                    <div class="row">

                       <div class="col-md-12">
                      <div class="form-group">
                        <label>Direccion Residencia</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-fw fa-street-view"></i>
                          </div>
                          <input type="text" class="form-control"/>
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                      </div>

                      <div class="col-md-12">
                      <div class="form-group">
                        <label>Direccion Envio</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-fw fa-street-view"></i>
                          </div>
                          <input type="text" class="form-control"/>
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                      </div>
                    </div>

                     <div class="row">

                      <div class="col-md-3">
                      </div>
                      <div class="col-md-3">
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" />
                              Factura Credito
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-3">
                        <div class="form-group">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" />
                              Factura Credito
                            </label>
                          </div>
                        </div>
                      </div>

                    </div>

                  </div><!-- /.box-body -->

                  <div class="col-md-2">
                  </div>

                  <div class="box-footer">

                     <form action='out_clientes.php'>

                         <input class="btn btn-primary" type="button" value="Cancelar" onClick=" window.location.href='out_clientes.php' ">
                     </form>  
                   
                    <button type="submit" class="btn btn-primary">Guardar</button>

                  </div>
                </form>
              </div><!-- /.box -->

              
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
    <!-- Page script -->
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