<?php

	$id_servicio='';
	$desc_servicio='';

	$id_servicio=$_POST['campo_id'];
	$desc_servicio=$_POST['campo_desc'];

	    include '../funciones_PHP/conexion.php'; //Incluyo la funcion que crea la conexion a la DB
	    //include 'funciones_PHP/variables_sesion.php';
	    if($connect)
	    {
	    	    if ($id_servicio!="")
	    	    {
		    	     $sql="select * from public.t_tipo_propiedades where f_id='$id_servicio'";
			    	 $res=pg_query($connect, $sql) or die("Error en la consulta SQL");
			    	 $reg=pg_num_rows($res);
			    	 $row = pg_fetch_array ($res);
			    	 if($reg==1)
			    	 {
			    	   $sql="update public.t_tipo_propiedades  SET f_descripcion = '$desc_servicio' WHERE f_id = '$id_servicio'";
			    	   $res=pg_query($connect, $sql) or die("Error insertando datos");
			    	   if($res)
			    	   {
			    	   		//echo "Update con exito";
			    	   		session_start();
					    	$_SESSION['consulta'] = "OK";
			    	    	header("location:../../PagWebIi/formularios/in_tipo_pago.php"); 
			    	   }	

			    	 }	
	    	    } 
		    	 else
		    	 {
		    	   $sql="insert into public.t_tipo_propiedades (f_descripcion) values ('$desc_servicio')";
		    	   $res=pg_query($connect, $sql) or die("Error insertando datos"); 
		    	   if($res)
		    	   {
		    	   		//echo "Insert con exito";
		    	   		session_start();
				    	$_SESSION['consulta'] = "OK";
		    	    	header("location:../../PagWebIi/formularios/in_tipo_pago.php"); 
		    	   }	
		    	 }	 	
	    }


?>