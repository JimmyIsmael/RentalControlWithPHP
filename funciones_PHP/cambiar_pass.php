<?php
	 session_start();
        if($_SESSION["estado"]!="OK"){
          header("location:../../AdminLTE-2.2.0/login.php");}
        $email=$_SESSION['email'];
    $old_pass='';
	$new_pass='';

	$new_pass=$_POST['campo_pass_nueva'];
	$old_pass=$_POST['campo_pass_actual'];

	    include '../funciones_PHP/conexion.php'; //Incluyo la funcion que crea la conexion a la DB
	    //include 'funciones_PHP/variables_sesion.php';
	    if($connect)
	    {
	    	    if (isset($email))
	    	    {
		    	     $sql="select * from public.t_usuarios where f_correo='$email' and f_password='$old_pass'";
			    	 $res=pg_query($connect, $sql) or die("Error en la consulta SQL");
			    	 $reg=pg_num_rows($res);
			    	 $row = pg_fetch_array ($res);
			    	 if($reg==1)
			    	 {
			    	   $sql="update public.t_usuarios SET f_password = '$new_pass' WHERE f_correo = '$email'";
			    	   $res=pg_query($connect, $sql) or die("Error insertando datos");
			    	   if($res)
			    	   {
			    	   		//echo "Update con exito";
			    	   		session_start();
					    	$_SESSION['consulta'] = "OK";
			    	    	header("location:../../PagWebI/formularios/qry_cambiar_pass.php"); 
			    	   }	

			    	 }	

			    	 else
			    	 {
			    	 	    session_start();
					    	$_SESSION['consulta'] = "FALLO";
			    	    	header("location:../../PagWebI/formularios/qry_cambiar_pass.php");
			    	 }
	    	    }  	
	    }
?>