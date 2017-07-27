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
        $id_user=$_SESSION['id_user'];

        include '../funciones_PHP/conexion.php';
        if ($_SESSION["id_user"]!=""){

          $sql="select * from t_usuarios where f_id_usuario='$id_user' order by f_id_usuario";                                       
          $res=pg_query($connect, $sql) or die("Error en la consulta SQL");
          if($res)
        {
            $row = pg_fetch_array($res);
            $ubicacion=$row['f_id_ubicacion'];
            $image = pg_unescape_bytea($row['f_imagen']);
            //Header( "Content-type: image/gif");
        }

        }

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