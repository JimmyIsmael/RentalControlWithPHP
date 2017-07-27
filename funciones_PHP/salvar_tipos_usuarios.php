<?php

	$id_servicio='';
	$desc_servicio='';

	$id_servicio=$_POST['campo_id'];
	$desc_servicio=$_POST['campo_desc'];

	    include '../funciones_PHP/conexion.php'; //Incluyo la funcion que crea la conexion a la DB
	    //include 'funciones_PHP/variables_sesion.php';
	    if($connect)
	    {
	    	    if (isset($id_servicio))
	    	    {
		    	     $sql="select * from public.t_tipos_usuarios where f_id='$id_servicio'";
			    	 $res=pg_query($connect, $sql) or die("Error en la consulta SQL");
			    	 $reg=pg_num_rows($res);
			    	 $row = pg_fetch_array ($res);
			    	 if($reg==1)
			    	 {
			    	   $sql="update public.t_tipos_usuarios  SET f_descripcion = '$desc_servicio' WHERE f_id = '$id_servicio'";
			    	   $res=pg_query($connect, $sql) or die("Error insertando datos");
			    	   if($res)
			    	   {
			    	   		//echo "Update con exito";
			    	   		session_start();
					    	$_SESSION['consulta'] = "OK";
			    	    	header("location:../../PagWebII/formularios/in_tipo_usuario.php"); 
			    	   }	

			    	 }	
	    	    } 
		    	 else
		    	 {
		    	   $sql="insert into public.t_tipos_usuarios (f_descripcion) values ('$desc_servicio')";
		    	   $res=pg_query($connect, $sql) or die("Error insertando datos"); 
		    	   if($res)
		    	   {
		    	   		//echo "Insert con exito";
		    	   		session_start();
				    	$_SESSION['consulta'] = "OK";
		    	    	header("location:../../PagWebII/formularios/in_tipo_usuario.php"); 
		    	   }	
		    	 }	 	
	    }


?>