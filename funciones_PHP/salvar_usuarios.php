<?php
		//$apellido='';
		$id="";
		$nombre='';
		$direccion='';
		$telefono='';
		$email='';
		$password='';
		$celular='';
		$cedula='';
		$fecha_ingreso='';
		$fecha_registro='';
		$fecha_nacimiento='';
		$limite='';
		$porciento='';
		$diapago='';
		$ubicacion='';
		$tipo='';
		$imagen='';

		$id=$_POST['campo_id'];
		$nombre=$_POST['campo_nombre'];
		$direccion=$_POST['campo_direccion'];
		$telefono=$_POST['campo_telefono'];
		$email=$_POST['campo_email'];
		$password=$_POST['campo_pass'];
		$celular=$_POST['campo_celular'];
		$cedula=$_POST['campo_cedula'];

		$fecha_ingreso=$_POST['campo_ingreso'];
		$fecha_registro=$_POST['campo_registro'];
		$fecha_nacimiento=$_POST['campo_nacimiento'];


		$ubicacion=$_POST['campo_ubicacion'];
		$tipo=$_POST['campo_tipo_user'];
		$imagen=$_POST['campo_tipo_user'];

		$data = file_get_contents('campo_img');
		$image = pg_escape_bytea($data);


	    include '../funciones_PHP/conexion.php'; //Incluyo la funcion que crea la conexion a la DB
	    //include 'funciones_PHP/variables_sesion.php';
	    if($connect)
	    {

	    	if ($id!="")
	    	    {
			    	   $sql="update public.t_usuarios  SET f_nombre = '$nombre', f_direccion='$direccion', f_telefono='$telefono',
			    	   f_correo='$email',f_celular='$celular',f_identificacion='$cedula',f_fecha_ingreso='$fecha_ingreso',
			    	   f_fecha_registro='$fecha_registro',f_fecha_nacimiento='$fecha_nacimiento',f_id_ubicacion='$ubicacion'
			    	   WHERE f_id_usuario = '$id'";

			    	   $fp = fopen('../funciones_PHP/data.txt', 'w');
						fwrite($fp, $sql);
						fclose($fp);
			    	   $res=pg_query($connect, $sql) or die("Error insertando datos");
			    	   if($res)
			    	   {
			    	   		//echo "Update con exito";
			    	   		session_start();
					    	$_SESSION['consulta'] = "OK";
			    	    	header("location:../../PagWebII/formularios/in_usuarios.php"); 
			    	   }	

			    	 	
	    	    } 
		    	 else
		    	 {

			    	 $sql="insert into t_usuarios (f_nombre,f_direccion,f_telefono
							,f_correo,f_password,f_celular,f_identificacion,f_fecha_ingreso,f_fecha_registro,f_fecha_nacimiento
						    ,f_id_ubicacion,f_tipo_usuario,f_imagen) 
							values
							('$nombre','$direccion','$telefono','$email','$password',
							'$celular','$cedula','$fecha_ingreso','$fecha_registro','$fecha_nacimiento','$ubicacion'
							,'$tipo','{$image}')";
			    	 $res=pg_query($connect, $sql) or die("Error en la consulta SQL");
			    	 $reg=pg_num_rows($res);
			    	 $row = pg_fetch_array ($res);
			    	 if(!$res)
			    	 {
						  
						   header("location:../../PagWebII/login.php");
			    	 }	
			    	 else
			    	 {
			    	 	session_start();
					    $_SESSION['consulta'] = "OK";
			    	    header("location:../../PagWebII/formularios/in_usuarios.php"); 
			    	 }	
		    	} 	
	    }
	    else
	    echo "<p><i>no conecte</i></p>";
	    pg_close($connect);
?>