<!DOCTYPE html>
  <?php
    include '../funciones_PHP/encabezado.php'; 
    include '../funciones_PHP/funciones_llenar_combo.php';
    
  ?>
<html>
  <head>
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
        <script>
      function validar(){
      // alert("entro"); 
       var count = 0;
        /* Login page */
        var  a = document.getElementById('text_nombre').value;
        //alert("Cojio el valor"); 
        if (a === ''){
            count = count + 1;
            document.getElementById('text_nombre').style.borderColor = "red";
        }else{document.getElementById('text_nombre').style.borderColor = "gray";}

        var  a = document.getElementById('text_ced').value;
        //alert("Cojio el valor"); 
        if (a === ''){
            count = count + 1;
            document.getElementById('text_ced').style.borderColor = "red";
        }else{document.getElementById('text_ced').style.borderColor = "gray";}

        var  a = document.getElementById('fecha_ingreso').value;
        //alert("Cojio el valor"); 
        if (a === ''){
            count = count + 1;
            document.getElementById('fecha_ingreso').style.borderColor = "red";
        }else{document.getElementById('fecha_ingreso').style.borderColor = "gray";}


        var  a = document.getElementById('fecha_nacimiento').value;
        //alert("Cojio el valor"); 
        if (a === ''){
            count = count + 1;
            document.getElementById('fecha_nacimiento').style.borderColor = "red";
        }else{document.getElementById('fecha_nacimiento').style.borderColor = "gray";}

        var  a = document.getElementById('fecha_registro').value;
        //alert("Cojio el valor"); 
        if (a === ''){
            count = count + 1;
            document.getElementById('fecha_registro').style.borderColor = "red";
        }else{document.getElementById('fecha_registro').style.borderColor = "gray";}

         var  a = document.getElementById('text_telefono').value;
        //alert("Cojio el valor"); 
        if (a === ''){
            count = count + 1;
            document.getElementById('text_telefono').style.borderColor = "red";
        }else{document.getElementById('text_telefono').style.borderColor = "gray";}

        var  a = document.getElementById('text_celular').value;
        //alert("Cojio el valor"); 
        if (a === ''){
            count = count + 1;
            document.getElementById('text_celular').style.borderColor = "red";
        }else{document.getElementById('text_celular').style.borderColor = "gray";}

        var  a = document.getElementById('text_email').value;
        //alert("Cojio el valor"); 
        if (a === ''){
            count = count + 1;
            document.getElementById('text_email').style.borderColor = "red";
        }else{document.getElementById('text_email').style.borderColor = "gray";}

        var  a = document.getElementById('text_dir').value;
        //alert("Cojio el valor"); 
        if (a === ''){
            count = count + 1;
            document.getElementById('text_dir').style.borderColor = "red";
        }else{document.getElementById('text_dir').style.borderColor = "gray";}

        var  a = document.getElementById('campo_ubicacion').value;
        //alert("Cojio el valor"); 
        if (a === ''){
            count = count + 1;
            document.getElementById('campo_ubicacion').style.borderColor = "red";
        }else{document.getElementById('campo_ubicacion').style.borderColor = "gray";}

        var  a = document.getElementById('campo_tipo').value;
        //alert("Cojio el valor"); 
        if (a === ''){
            count = count + 1;
            document.getElementById('campo_tipo').style.borderColor = "red";
        }else{document.getElementById('campo_tipo').style.borderColor = "gray";}

        var  a = document.getElementById('text_sexo').value;
        //alert("Cojio el valor"); 
        if (a === ''){
            count = count + 1;
            document.getElementById('text_sexo').style.borderColor = "red";
        }else{document.getElementById('text_sexo').style.borderColor = "gray";}

        //if (document.getElementById(text_id).value==='')
       //  {
            var  a = document.getElementById('text_pass').value;
            //alert("Cojio el valor"); 
            if (a === ''){
                count = count + 1;
                document.getElementById('text_pass').style.borderColor = "red";
            }else{document.getElementById('text_pass').style.borderColor = "gray";}

            var  a = document.getElementById('text_conf_pass').value;
            //alert("Cojio el valor"); 
            if (a === ''){
                count = count + 1;
                document.getElementById('text_conf_pass').style.borderColor = "red";
            }else{document.getElementById('text_conf_pass').style.borderColor = "gray";}

         // }
        




        if (count > 0){
            //alert("Hay datos vacios. Por favor verifique nuevamente y llene los espacios en blanco correspondientes.");
             document.formulario.boton_modal_warning.click();
            return false;
        }
        else
        {
            return true;
        }
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
              Registro de Usuarios
          </h1>
        </section>

        <!-- Main content -->
      <section class="content">

        <div class="row">
            <!-- left column -->
            <div class="col-md-7">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Entrada de Usuarios</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form name="formulario" action="../funciones_PHP/salvar_usuarios.php" method="post"
                 onsubmit="return validar()">
                  <div class="box-body">

                    <div class="row">

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Codigo</label>
                          <input type="text" class="form-control" id="text_id" name="campo_id" placeholder="ID Usuario" value='<?php echo $id_user; ?>' readonly>
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nombre Completo</label>
                          <input type="text" class="form-control" id="text_nombre" name="campo_nombre" placeholder="Nombre" value='<?php echo $row['f_nombre'];?>'>
                        </div>
                      </div>



                      <div class="col-md-3">
                         <div class="form-group">
                          <label>Identificacion</label>
                          <div class="input-group">
                            <input type="text" class="form-control" id="text_ced" name="campo_cedula" data-inputmask='"mask": "999-9999999-9"' data-mask 
                            placeholder="###-#######-#" value='<?php echo $row['f_identificacion'];?>'/>
                          </div><!-- /.input group -->
                        </div><!-- /.form group -->
                      </div>
                    </div>
                    <div class="row">

                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Fecha Ingreso</label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input id="fecha_ingreso" name="campo_ingreso" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask value='<?php echo $row['f_fecha_ingreso'];?>'/>
                          </div><!-- /.input group -->
                       </div><!-- /.form group -->
                      </div>

                      <div class="col-md-4">
                      <div class="form-group">
                          <label>Fecha Nacimiento</label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input id="fecha_nacimiento" name="campo_nacimiento" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask value='<?php echo $row['f_fecha_nacimiento'];?>'/>
                          </div><!-- /.input group -->
                       </div><!-- /.form group -->
                      </div>

                       <div class="col-md-4">
                      <div class="form-group">
                          <label>Fecha Registro</label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input value='<?php echo $row['f_fecha_registro'];?>' id="fecha_registro" name="campo_registro" type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask />
                          </div><!-- /.input group -->
                       </div><!-- /.form group -->
                      </div>

                    </div>


                    <div class="row">

                      <div class="col-md-4">
                       <div class="form-group">
                        <label>Telefono Local</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                          </div>
                          <input value='<?php echo $row['f_telefono'];?>'  type="text" class="form-control" id="text_telefono" name="campo_telefono" data-inputmask='"mask": "(999) 999-9999"' data-mask />
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                      </div>

                      <div class="col-md-4">
                      <div class="form-group">
                        <label>Telefono Celular</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                          </div>
                          <input value='<?php echo $row['f_celular'];?>' type="text" class="form-control" id="text_celular" name="campo_celular" data-inputmask='"mask": "(999) 999-9999"' data-mask />
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                      </div>

                      <div class="col-md-4">
                      <div class="form-group">
                        <label>Email</label>
                        <div class="input-group">
                          <div class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                          </div>
                          <input value='<?php echo $row['f_correo'];?>' id="text_email"  name="campo_email" type="email" class="form-control"/>
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->
                      </div>
                    </div>

                 

                    <div class="row">

                       <div class="col-md-8">
                        <div class="form-group">
                          <label>Direccion Residencia</label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-fw fa-street-view"></i>
                            </div>
                            <input value='<?php echo $row['f_direccion'];?>' id="text_dir" name="campo_direccion" type="text" class="form-control"/>
                          </div><!-- /.input group -->
                        </div><!-- /.form group -->
                      </div>


                      <div class="col-md-4">
                          <div class="form-group">
                          <label for="exampleInputEmail1">Ubicacion</label>
                          <select  class="form-control select" name="campo_ubicacion" id="campo_ubicacion">
                            
                           <?php 
                               if($connect)
                                  {

                                      $sql="select * from t_ubicaciones order by f_id";
                                       $res=pg_query($connect, $sql) or die("Error en la consulta SQL");
                                       if($res)
                                       { 
                                          while($row = pg_fetch_array($res))
                                          {
                                            echo'<OPTION VALUE="'.$row['f_id'].'">'.$row['f_descripcion'].'</OPTION>';
                                          }
                                       }   
                                  }
                             // $tabla="t_ubicaciones";
                            // llenar_combo_dos_campos($tabla);
                            ?>
                          </select>
                        </div> 
                      </div>

                    </div>

                    <div class="row">

                      <div class="col-md-4">
                          <div class="form-group">
                          <label for="exampleInputEmail1">Sexo</label>
                          <select class="form-control select" name="campo_sexo" id="text_sexo">
                            <option selected="selected">Masculino</option>
                            <option>Femenino</option>
                          </select>
                        </div> 
                      </div>
                      
                      <div class="col-md-4">
                      <div class="form-group">
                        <label for="exampleInputEmail1">Tipo Usuario</label>
                        <select class="form-control select" name="campo_tipo_user" id="campo_tipo">

                           <?php 
                               if($connect)
                                  {
                                       $sql="select * from t_tipos_usuarios order by f_id desc";
                                       $res=pg_query($connect, $sql) or die("Error en la consulta SQL");
                                       //$row = pg_fetch_array($res);
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
                      </div> 


                    </div>


                    <div class="row">
                      <div class="col-md-12">
                       <div class="panel panel-default">
                        <div class="panel-heading">Entrada al Sistema</div>
                          <div class="panel-body">

                          <div class="row">


                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Contrasena</label>
                              <input value='<?php echo $row['f_correo'];?>'   type="password" class="form-control" id="text_pass" placeholder="Contrasena">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="exampleInputEmail1">Validar Contrasena</label>
                              <input  value='<?php echo $row['f_password'];?>'type="password" class="form-control" id="text_conf_pass" name="campo_pass"   placeholder="Contrasena" onchange="validar_pass()">
                            </div>
                          </div>

                          <div class="col-md-3">
                            <div class="form-group">
                              
                            </div><!-- /.form group -->
                           </div>
                          </div>
                         </div>
                        </div>
                      </div>
                    </div>

                  </div><!-- /.box-body -->

                  <div class="box-footer">

                    <input  class="btn btn-primary" type="button" value="Cancelar" onClick="window.location.href='out_usuarios.php' ">  
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    
                    <button type="button" class="btn btn-primary" data-toggle="modal" 
                    data-target=".modal-info" style='display:none;' name="boton_modal">Modal</button>

                    <button type="button" class="btn btn-primary" data-toggle="modal" 
                    data-target=".modal-warning" style='display:none;' name="boton_modal_pass">ModalPass</button>

                     <button type="button" class="btn btn-primary" data-toggle="modal" 
                    data-target=".modal-danger" style='display:none;' name="boton_modal_warning">ModalWarning</button>
                  </div>
               </form> 
              </div><!-- /.box -->
            </div>

            <div class="col-md-5">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Foto Usuario</h3>
                 </div><!-- /.box-header -->
                  <div class="box-body">
                    <div class="row">
                      <div class="col-md-2">
                      </div>
                      <div class="col-md-8">
                       <img src='<?php echo $row['$image'];?>' class="img-responsive" alt="Cinque Terre" width="510" height="236"> 
                      </div>
                      <div class="col-md-2">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-2"></div>
                      <div class="col-md-8">
                         <div class="form-group">
                            <label for="exampleInputFile">Foto</label>
                            <input type="file" id="exampleInputFile" name="campo_img">
                            <p class="help-block">Example block-level help text here.</p>
                        </div>
                      </div>
                      <div class="col-md-2"></div>
                    </div>
                    </form>  

                  </div><!-- /.box-body -->
                </div>
            </div><!-- /.box -->
              
      </section>


         <div class="example-modal">
            <div class="modal modal-info">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Aviso</h4>
                  </div>
                  <div class="modal-body">
                    <p>Datos Guardados Exitosamente</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline" data-dismiss="modal">Close</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div><!-- /.example-modal -->


           <div class="example-modal">
            <div class="modal modal-warning">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Aviso</h4>
                  </div>
                  <div class="modal-body">
                    <p>Las contraseñas digitadas deben ser iguales</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline" data-dismiss="modal">Close</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div><!-- /.example-modal -->

          <div class="example-modal">
            <div class="modal modal-danger">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Aviso</h4>
                  </div>
                  <div class="modal-body">
                    <p>Debe completar el formulario antes de guardar</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div><!-- /.example-modal -->



      <!-- /.content -->
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

    

    <script>
      function validar_load(){ 
           var consulta="<?php echo $consulta?>" ;
           if (consulta=='OK')
           {
              document.formulario.boton_modal.click();
              //alert('Datos Guardados Exitosamente');
              var consulta="<?php  $_SESSION['consulta']="'NO'";?>"
              var consulta="<?php  $_SESSION['id_user']="";?>"
           }
}
    </script>
<script language="javascript">
window.onload = function() {validar_load()};
</script>

<script>
      function validar_pass(){ 

      var pass1=document.getElementById('text_pass').value; 
      var pass2=document.getElementById('text_conf_pass').value;

      if (pass1!=pass2){
          document.getElementById('text_pass').style.borderColor = "red";
          document.getElementById('text_conf_pass').style.borderColor = "red"; 

          document.getElementById('text_pass').value='';
          document.getElementById('text_conf_pass').value=''; 
          

         document.formulario.boton_modal_pass.click();
      }
      else
      {
          document.getElementById('text_pass').style.borderColor = "gray";
          document.getElementById('text_conf_pass').style.borderColor = "gray"; 
      }
}
</script>
<script type="text/javascript">
  function validar_mail(){

  }
</script>

    <script type="text/javascript">
      $(document).ready(function(){
          $('#campo_ubicacion > option[value="<?php echo $ubicacion?>"]').attr('selected', 'selected');
      });
    </script>
  </body>
</html>