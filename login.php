<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <title>Alquimia | Log in</title>
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
  </head>
  <body class="login-page">
    <!-- INCLUDE DE PHP -->
    <?php include 'funciones_PHP/conexion.php' ?>

    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>Alquimia</b></a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Inicio de sesion</p>
        <form action='funciones_PHP/login.php' method="post" onsubmit="return validarLogin()" name="formulario">
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="Email" name="campo_email" id="email"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" name="campo_pass" id="pass"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <a href="">Olvide mi contraseña</a><br>
                  <a href="registro.php">Registrarme</a>
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>

              <button type="button" class="btn btn-primary" data-toggle="modal" 
                    data-target=".modal-danger" style='display:none;' name="boton_modal_pass">ModalPass</button>
            </div><!-- /.col -->
          </div>
        </form>
        <!-- <a href="register.html" class="text-center">Register a new membership</a> -->
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->



          <div class="example-modal">
            <div class="modal modal-danger">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Aviso</h4>
                  </div>
                  <div class="modal-body">
                    <p>Debe digitar su usuario y contrasena para entrar.</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline" data-dismiss="modal">Cerrar</button>
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

function Validar(mail){
    $.ajax({ 
        type: "POST", 
        url: "funciones_PHP/login.php.php", 
        data: {email: mail,}
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
   <!-- FUNCIONES PHP --> 
  </body>
</html>
