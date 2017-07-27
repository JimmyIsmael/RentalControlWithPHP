<!DOCTYPE html>
  <?php
    include '../funciones_PHP/encabezado_propiedades.php'; 
    include '../funciones_PHP/funciones_llenar_combo.php';
    
  ?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Alquimia | Propiedades</title>
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
        var  a = document.getElementById('text_desc').value;
        //alert("Cojio el valor"); 
        if (a === ''){
            count = count + 1;
            document.getElementById('text_desc').style.borderColor = "red";
        }else{document.getElementById('text_desc').style.borderColor = "gray";}

        var  a = document.getElementById('text_dir').value;
        //alert("Cojio el valor"); 
        if (a === ''){
            count = count + 1;
            document.getElementById('text_dir').style.borderColor = "red";
        }else{document.getElementById('text_dir').style.borderColor = "gray";}

        var  a = document.getElementById('text_ubicacion').value;
        //alert("Cojio el valor"); 
        if (a === ''){
            count = count + 1;
            document.getElementById('text_ubicacion').style.borderColor = "red";
        }else{document.getElementById('text_ubicacion').style.borderColor = "gray";}

        /*var  a = document.getElementById('text_hab').value;
        //alert("Cojio el valor"); 
        if (a === ''){
            count = count + 1;
            document.getElementById('text_hab').style.borderColor = "red";
        }else{document.getElementById('text_hab').style.borderColor = "gray";}

        var  a = document.getElementById('text_banos').value;
        //alert("Cojio el valor"); 
        if (a === ''){
            count = count + 1;
            document.getElementById('text_banos').style.borderColor = "red";
        }else{document.getElementById('text_banos').style.borderColor = "gray";}

        var  a = document.getElementById('text_monto').value;
        //alert("Cojio el valor"); 
        if (a === ''){
            count = count + 1;
            document.getElementById('text_monto').style.borderColor = "red";
        }else{document.getElementById('text_monto').style.borderColor = "gray";}*/

        var  a = document.getElementById('text_tipo').value;
        //alert("Cojio el valor"); 
        if (a === ''){
            count = count + 1;
            document.getElementById('text_tipo').style.borderColor = "red";
        }else{document.getElementById('text_tipo').style.borderColor = "gray";}

        


        
        if (count > 0){
            //alert("Hay datos vacios. Por favor verifique nuevamente y llene los espacios en blanco correspondientes.");
             
            return false;
            document.formulario.boton_modal_warning.click();
        }
        else
        {
            return true;
        }
}


    </script>

<script>
      function validarSecciones(){
      // alert("entro"); 
       var count = 0;
        /* Login page */
        var  a = document.getElementById('text_desc_sec').value;
        //alert("Cojio el valor"); 
        if (a === ''){
            count = count + 1;
            document.getElementById('text_desc_sec').style.borderColor = "red";
            document.getElementById('text_desc_sec').placeholder = "Dede Completar Este Campo";
        }else{document.getElementById('text_desc_sec').style.borderColor = "gray";}

        var  a = document.getElementById('text_tipo_sec').value;
        //alert("Cojio el valor"); 
        if (a === ''){
            count = count + 1;
            document.getElementById('text_tipo_sec').style.borderColor = "red";
            document.getElementById('text_tipo_sec').placeholder = "Dede Completar Este Campo";
        }else{document.getElementById('text_tipo_sec').style.borderColor = "gray";}

         var  a = document.getElementById('text_aql_sec').value;
        //alert("Cojio el valor"); 
        if (a === ''){
            count = count + 1;
            document.getElementById('text_aql_sec').style.borderColor = "red";
            document.getElementById('text_aql_sec').placeholder = "Dede Completar Este Campo";
        }else{document.getElementById('text_aql_sec').style.borderColor = "gray";}

        if (count > 0){
            return false;
            document.formulario.boton_modal_warning.click();
        }
        else
        {
            return true;
        }
}
    </script>

    <script>


          function salvarSecciones(){
            //alert("Entro id "+id);

            if (validarSecciones()){

               $.ajax({ 
                type: "POST", 
                url: "../funciones_PHP/salvar_secciones.php", 
                data: "id="+document.getElementById("text_id_sec").value+"&desc="+document.getElementById("text_desc_sec").value+
                "&tipo="+document.getElementById("text_tipo_sec").value+"&alquiler="+document.getElementById("text_aql_sec").value+
                "&pro="+document.getElementById("text_idpro_sec").value
            }).done(function(result) {
                 if (result!='0') {
                 // document.formulario.boton_modal.click();
                  //alert("Datos Salvados Exitosamente");
                  $('#modal-guardado').modal('show');
                  $('#modal_editar').modal('hide');
                  mostrarInfoSeccion();
                  
                 }
            });

            }
           
    }
    </script>


    <script>
      function mostrarInfoSeccion(){

          if (document.getElementById("text_id").value!=''){

            var sql='select * from t_secciones where f_id_propiedad='+document.getElementById("text_id").value;

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
              }
              else
              { 
                document.getElementById("datos").innerHTML='Cargando...';
              }
            }

           // document.getElementById('text_id').value=sql;
            xmlhttp.open("POST","../funciones_PHP/consulta_secciones.php",true);
            xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded;charset=utf-8");
            xmlhttp.send("sql="+String(sql));

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
              Registro de Propiedades
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
                  <h3 class="box-title">Entrada de Propiedades</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form name="formulario" action="../funciones_PHP/salvar_propiedades.php" method="post"
                 onsubmit="return validar()">
                  <div class="box-body">

                    <div class="row">

                      <div class="col-md-3">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Codigo</label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-fw fa-home"></i>
                            </div>
                          <input type="text" class="form-control" id="text_id" name="campo_id" placeholder="ID"
                           value='<?php echo $id_user; ?>' readonly>
                        </div>
                       </div>
                      </div>

                      <div class="col-md-9">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Descripcion</label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-fw fa-building"></i>
                            </div>
                            <input value='<?php echo $row['f_descripcion'];?>' id="text_desc" name="campo_desc"
                             type="text" class="form-control"/>
                          </div><!-- /.input group -->
                        </div>
                      </div>




                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Direccion Propiedad</label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-fw fa-street-view"></i>
                            </div>
                            <input value='<?php echo $row['f_direccion'];?>' id="text_dir" name="campo_direccion"
                             type="text" class="form-control"/>
                          </div><!-- /.input group -->
                        </div><!-- /.form group -->
                      </div>  
                    </div>
                    <div class="row">

                    <div class="col-md-4">
                          <div class="form-group">
                          <label for="exampleInputEmail1">Ubicacion</label>
                          <select  class="form-control select" name="campo_ubicacion" id="text_ubicacion">
                                                  <option selected="selected"></option>
                           <?php 
                               if($connect)
                                  {
                                      $sql1="select * from t_ubicaciones order by f_id";
                                       $res1=pg_query($connect, $sql1) or die("Error en la consulta SQL");
                                       if($res1)
                                       { 
                                          while($row1 = pg_fetch_array($res1))
                                          {
                                            echo'<OPTION VALUE="'.$row1['f_id'].'">'.$row1['f_descripcion'].'</OPTION>';
                                          }
                                       }   
                                  }
                            ?>
                          </select>
                        </div> 
                      </div>

<!--                       <div class="col-md-4">
                      <div class="form-group">
                          <label>Cantidad Habitaciones</label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-fw  fa-hotel"></i>  
                            </div>
                            <input type="text" class="form-control" id="text_hab" name="campo_hab" placeholder="# Habitaciones"
                             value=''>
                          </div>
                       </div>
                      </div>

                      <div class="col-md-4">
                      <div class="form-group">
                          <label>Cantidad Banos</label>
                          <div class="input-group">
                            <div class="input-group-addon">
                               <i class="fa fa-fw  fa-female"></i>   
                            </div>
                            <input type="text" class="form-control" id="text_banos" name="campo_banos" placeholder="# Banos"
                             value=''>
                          </div>
                       </div>
                      </div> -->


                       <!--  <div class="col-md-4">
                          <div><label for="exampleInputEmail1">Precio Alquiler</label></div>
                           <div class="input-group">
                              <span class="input-group-addon">$</span>
                              <input id="text_monto" name="campo_monto" type="text" class="form-control" value=''>
                              <span class="input-group-addon">.00</span>
                          </div>
                        </div> -->

                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Tipo Propiedad</label>
                            <select class="form-control select" id="text_tipo" name="campo_tipo">
                                <option selected="selected"></option>
                                <?php 
                                     if($connect)
                                        {
                                             $sql2="select * from t_tipo_propiedades";
                                             $res2=pg_query($connect, $sql2) or die("Error en la consulta SQL");
                                             //$row = pg_fetch_array($res);
                                             if($res2)
                                             { 
                                                while($row2 = pg_fetch_array($res2))
                                                {
                                                  echo'<OPTION VALUE="'.$row2['f_id'].'">'.$row2['f_descripcion'].'</OPTION>';
                                                }
                                             }    
                                        }
                                  ?>
                          </select>
                        </div> 
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label>Estado Propiedad</label>
                            <select class="form-control select" id="text_estado" campo="campo_est" disabled>
                                <option selected="selected"></option>
                                <?php 
                                     if($connect)
                                        {
                                             $sql3="select * from t_estado_propiedades";
                                             $res3=pg_query($connect, $sql3) or die("Error en la consulta SQL");
                                             //$row = pg_fetch_array($res);
                                             if($res3)
                                             { 
                                                while($row3 = pg_fetch_array($res3))
                                                {
                                                  echo'<OPTION VALUE="'.$row3['f_id'].'">'.$row3['f_descripcion'].'</OPTION>';
                                                }
                                             }    
                                        }
                                  ?>
                          </select>
                        </div> 
                      </div>

                 </div>

<!--                     <div class="row">

                       <div class="col-md-4">
                          <div><label for="exampleInputEmail1">Precio Mantenimiento</label></div>
                           <div class="input-group">
                              <span class="input-group-addon">$</span>
                              <input id="text_mant" name="campo_mant" type="text" class="form-control" value=''>
                              <span class="input-group-addon">.00</span>
                          </div>
                        </div>


                      <div class="col-md-8">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Inquilino</label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-fw fa-user"></i>
                            </div>
                            <input    type="text" class="form-control" value='' readonly/>
                          </div>
                        </div>
                      </div>


                    </div>

                    <div class="row">

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Dia Pago</label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-fw fa-calendar"></i>
                            </div>
                            <input value=''  type="text" class="form-control" readonly/>
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-md-8">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Condicion Pago</label>
                          <div class="input-group">
                            <div class="input-group-addon">
                              <i class="fa fa-fw fa-book"></i>
                            </div>
                            <input value='' type="text" class="form-control" readonly/>
                          </div>
                        </div>
                      </div> 


                    </div> -->



                    <div class="row">
                      <div class="col-md-12">
                       <div class="panel panel-default">
                        <div class="panel-heading">Secciones de la propiedad</div>
                          <div class="panel-body">

                            <div class="box-footer">
                              <div class="row">
                                <div class="col-md-10">
                                  
                                </div>
                                <div class="col-md-2">
                                   <button type="button" class="btn btn-primary" data-toggle="modal" 
                                      data-target="#modal_editar" name="boton_modal_agregar">Agregar</button>
                                </div>
                              </div>
                            </div>
                   

                       <div class="row">
                        <div class="col-xs-12">
                          <div class="box">
                            <div class="box-body table-responsive no-padding">
                              
                              <div id="datos"></div>
                            
                            </div>
                          </div>
                        </div>
                       </div>
  

                         </div>
                        </div>
                      </div>
                    </div>

                    
                  </div><!-- /.box-body -->

                  <div class="box-footer">

                    <input  class="btn btn-primary" type="button" value="Cancelar" onClick="window.location.href='out_propiedades.php' ">  
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    
                    <button type="button" class="btn btn-primary" data-toggle="modal" 
                    data-target=".modal-info" style='display:none;' name="boton_modal">Modal</button>

                    <button type="button" class="btn btn-primary" data-toggle="modal" 
                    data-target=".modal-warning" style='display:none;' name="boton_modal_pass">ModalPass</button>

                     <button type="button" class="btn btn-primary" data-toggle="modal" 
                    data-target=".modal-danger" style='display:none;' name="boton_modal_warning">ModalWarning</button>
                  </div> 
              </div><!-- /.box -->
            </div>


                  <div class="col-md-5">
                  <div class="box box-primary">
                    <div class="box-header with-border">
                      <h3 class="box-title">Galeria Fotos</h3>
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
                  </div>




          </div><!-- /.box -->
              
      </section>


        
          <div class="example-modal">
            <div class="modal" id="modal_editar">
              <div class="modal-dialog ">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Secciones</h4>
                  </div>
                <form name="formulario" action="../funciones_PHP/salvar_secciones.php" method="post"
                 onsubmit="return validarSecciones()">
                  <div class="modal-body">

                            <div class="row">
                                      <div class="col-md-4">
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Codigo Propiedad</label>
                                          <div class="input-group">
                                            <div class="input-group-addon">
                                              <i class="fa fa-fw fa-home"></i>
                                            </div>
                                          <input type="text" class="form-control" id="text_idpro_sec" name="campo_id" placeholder="ID"
                                           value='<?php echo $id_user; ?>' readonly>
                                        </div>
                                       </div>  
                                     </div>
                            </div>
                            <div class="row">
                             <div class="col-md-4">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Codigo Seccion</label>
                                  <div class="input-group">
                                    <div class="input-group-addon">
                                      <i class="fa fa-fw fa-home"></i>
                                    </div>
                                  <input type="text" class="form-control" id="text_id_sec" name="campo_id" placeholder="ID"
                                   value='' readonly>
                                </div>
                               </div>  
                             </div>
                             <div class="col-md-8">
                               <div class="form-group">
                                  <label for="exampleInputEmail1">Descripcion</label>
                                  <div class="input-group">
                                    <div class="input-group-addon">
                                      <i class="fa fa-fw fa-building"></i>
                                    </div>
                                    <input value='' id="text_desc_sec" name="campo_desc"
                                     type="text" class="form-control"/>
                                  </div><!-- /.input group -->
                                </div> 
                             </div>
                           </div> 

                          <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                  <label>Tipo Seccion</label>
                                    <select class="form-control select" id="text_tipo_sec" name="campo_tipo">
                                        <option selected="selected"></option>
                                        <?php 
                                             if($connect)
                                                {
                                                     $sql2="select * from t_tipo_propiedades";
                                                     $res2=pg_query($connect, $sql2) or die("Error en la consulta SQL");
                                                     //$row = pg_fetch_array($res);
                                                     if($res2)
                                                     { 
                                                        while($row2 = pg_fetch_array($res2))
                                                        {
                                                          echo'<OPTION VALUE="'.$row2['f_id'].'">'.$row2['f_descripcion'].'</OPTION>';
                                                        }
                                                     }    
                                                }
                                          ?>
                                  </select>
                                </div> 
                            </div>

                            <div class="col-md-4">
                              <div><label for="exampleInputEmail1">Alquiler</label></div>
                                <div class="input-group">
                                  <span class="input-group-addon">$</span>
                                  <input id="text_aql_sec" name="campo_mant" type="text" class="form-control" value=''>
                              </div>  
                            </div>

                           </div>

                          <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Inquilino</label>
                                  <div class="input-group">
                                    <div class="input-group-addon">
                                      <i class="fa fa-fw fa-user"></i>
                                    </div>
                                    <input  type="text" class="form-control" value='' readonly/>
                                  </div><!-- /.input group -->
                                </div>
                              </div> 

                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Dia Pago</label>
                                  <div class="input-group">
                                    <div class="input-group-addon">
                                      <i class="fa fa-fw fa-calendar"></i>
                                    </div>
                                    <input value=''  type="text" class="form-control" readonly/>
                                  </div><!-- /.input group -->
                                </div>
                              </div>
                           </div>
                  </div>


                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="salvarSecciones()">Guardar</button>
                  </form>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div><!-- /.example-modal -->


         <div class="example-modal">
            <div class="modal modal-info" id="modal-guardado">
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
     <!-- Selecciona al cargar la pagina los valores de la db en los combos que se llenaron con todos los datos -->
    <script type="text/javascript">
      $(document).ready(function(){
          $('#text_ubicacion > option[value="<?php echo $id_ubicacion?>"]').attr('selected', 'selected');
          $('#text_tipo > option[value="<?php echo $id_tipo?>"]').attr('selected', 'selected');
          //alert("<?php echo $id_tipo?>");
          $('#text_estado > option[value="<?php echo $id_estado?>"]').attr('selected', 'selected');
          mostrarInfoSeccion();
      });
    </script>


<script language="javascript">
    window.load = function() {
      validar_load();
      
    };
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
  </body>
</html>