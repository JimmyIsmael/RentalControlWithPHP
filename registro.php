<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>FinancialControl | Registro</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?php include 'funciones_PHP/conexion.php' ?>

    <?php
        session_start();
        $consulta=$_SESSION['consulta'];
  ?>


  <script>
    function ValidarMail(email){

      //alert(email);
      if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
      }
      else
      {// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }

      xmlhttp.open("POST","funciones_PHP/validar_mail.php",true);
      xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
      xmlhttp.send("email="+email);

      xmlhttp.onreadystatechange=function()
      {
          if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
          document.getElementById("datos").html=xmlhttp.responseText;
        }
        else
        { 
          document.getElementById("datos").innerHTML='Cargando...';
        }
      }


    }

    function Validar(mail){
    $.ajax({ 
        type: "POST", 
        url: "funciones_PHP/validar_mail.php", 
        data: {email: mail}
    }).done(function(result) {
         if (result==1) {
          document.getElementById("datos").innerHTML="...........................Correo No Disponible..........................";
          document.getElementById('email').style.borderColor = "red";  //alert("Correo Detectado");
         }else{
            document.getElementById("datos").innerHTML="...........................Correo Disponible..........................";
          document.getElementById('email').style.borderColor = "gray";  //alert("Correo Detectado");
            //window.location.reload(true);  
         }
    });
    }
    </script>


  </head>
  <body class="register-page">
    <div class="register-box">
      <div class="register-logo">
        <a href="#"><b>Alquimia
        </b></a>
      </div>

      <div class="register-box-body">
        <p class="login-box-msg">Registro de Usuarios</p>
        <form name="formulario" action="funciones_PHP/salvar_registro_nuevo.php" method="post" onsubmit="return validarLogin()">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Nombre Completo" id="nombre" name="campo_nombre" />
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
    
        <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Dirección" id="dir" name="campo_direccion"/>
            <span class="glyphicon glyphicon-home form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Telefono" id="telefono" name="campo_celular"/>
            <span class="glyphicon glyphicon-phone-alt form-control-feedback"></span>
        </div>
        
        <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="Identificación" id="ident" name="campo_cedula"/>
            <span class="glyphicon glyphicon-credit-card form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" id="email" name="campo_email" onchange="Validar(this.value)" /><div id="datos"></div>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" id="pass" name="campo_pass" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="validar password" name="campo_val_pass"  id="pass2" onchange="validar_pass()"/>
            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-6">
              <div class="checkbox icheck">
                <label>
                  <!--<input type="checkbox"> I agree to the <a href="#">terms</a>-->
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-6">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Registrarme</button>
            </div><!-- /.col -->
          </div>

          <button type="button" class="btn btn-primary" data-toggle="modal" 
                    data-target=".modal-danger" style='display:none;' name="boton_modal_pass">ModalPass</button>

           <button type="button" class="btn btn-primary" data-toggle="modal" 
                    data-target=".modal-warning" style='display:none;' name="boton_modal_validar">ModalValidar</button> 

                    <button type="button" class="btn btn-primary" data-toggle="modal" 
                    data-target=".modal-info" style='display:none;' name="boton_modal">Modal</button>         
        </form>

      </div><!-- /.form-box -->
    </div><!-- /.register-box -->


        <div class="example-modal">
            <div class="modal modal-danger">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Aviso</h4>
                  </div>
                  <div class="modal-body">
                    <p>Debe completar todos los campos antes de registrarse.</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline" data-dismiss="modal">Cerrar</button>
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
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
          </div><!-- /.example-modal -->

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

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });

      function validarLogin(){
    var count = 0;
        /* Login page */

        var a = document.getElementById('nombre').value;
        if (a === ''){
            count = count + 1;
            document.getElementById('nombre').style.borderColor = "red";

        }else{document.getElementById('nombre').style.borderColor = "gray";}

        var a = document.getElementById('dir').value;
        if (a === ''){
            count = count + 1;
            document.getElementById('dir').style.borderColor = "red";

        }else{document.getElementById('dir').style.borderColor = "gray";}


        var a = document.getElementById('telefono').value;
        if (a === ''){
            count = count + 1;
            document.getElementById('telefono').style.borderColor = "red";

        }else{document.getElementById('telefono').style.borderColor = "gray";}

        var a = document.getElementById('ident').value;
        if (a === ''){
            count = count + 1;
            document.getElementById('ident').style.borderColor = "red";

        }else{document.getElementById('ident').style.borderColor = "gray";}


        var a = document.getElementById('email').value;
        if (a === ''){
            count = count + 1;
            document.getElementById('email').style.borderColor = "red";
        }else{document.getElementById('email').style.borderColor = "gray";}

        a = document.getElementById('pass').value;
        if (a === ''){
            count = count + 1;
            document.getElementById('pass').style.borderColor = "red";
        }else{document.getElementById('pass').style.borderColor = "gray";}

        a = document.getElementById('pass2').value;
        if (a === ''){
            count = count + 1;
            document.getElementById('pass2').style.borderColor = "red";
        }else{document.getElementById('pass2').style.borderColor = "gray";}

        if (count > 0){
            //alert("Hay datos vacios. Por favor verifique nuevamente y llene los espacios en blanco correspondientes.");
             document.formulario.boton_modal_pass.click();
             
            return false;
        }
        else
        {
            return true;
        }
}


      function validar_pass(){ 

      var pass1=document.getElementById('pass').value; 
      var pass2=document.getElementById('pass2').value;

      if (pass1!=pass2){
          document.getElementById('pass').style.borderColor = "red";
          document.getElementById('pass2').style.borderColor = "red"; 
          document.formulario.boton_modal_validar.click();
          document.formulario.campo_pass.value=""; 
          document.formulario.campo_val_pass.value=""; 
      }
      else
      {
          document.getElementById('pass').style.borderColor = "gray";
          document.getElementById('pass2').style.borderColor = "gray"; 
      }
      

}
        window.onload = function() {validar_load()};
        function validar_load(){ 
        var consulta="<?php echo $consulta?>" ;
        if (consulta=='OK')
        {
          document.formulario.boton_modal.click();
          //alert('Datos Guardados Exitosamente');
          var consulta="<?php  $_SESSION['consulta']="'NO'";?>"
        }
        else
        {
          if (consulta=='FALLO')
          {
            alert('Ya existe un usuario con este email');
            document.getElementById('email').style.borderColor = "red"
            //document.formulario.boton_modal_pass.click(); 
          }
            
        }
      }

    </script>
    
  </body>
</html>
