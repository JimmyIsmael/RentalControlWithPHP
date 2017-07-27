<?php
		//$apellido='';
		$id="";
		$desc='';
		$direccion='';
		$ubicacion='';
		$habitacion='';
		$banos='';
		$precio='';
		$tipo='';
		$estado='';
		$mant='';
		

		$id=$_POST['campo_id'];
		$desc=$_POST['campo_desc'];
		$direccion=$_POST['campo_direccion'];
		$ubicacion=$_POST['campo_ubicacion'];
		$habitacion=$_POST['campo_hab'];
		$banos=$_POST['campo_banos'];
		$precio=$_POST['campo_monto'];
		$tipo=$_POST['campo_tipo'];

		$estado=$_POST['campo_est'];

		$mant=$_POST['campo_mant'];
		
	    include '../funciones_PHP/conexion.php'; //Incluyo la funcion que crea la conexion a la DB
	    //include 'funciones_PHP/variables_sesion.php';
	    if($connect)
	    {

	    	if ($id!="")
	    	    {
			    	   $sql="update public.t_propiedades  SET f_descripcion = '$desc', f_id_ubicacion=$ubicacion,
			    	   		f_id_tipo_propiedad=$tipo,f_direccion='$direccion' WHERE f_id = '$id'";

			    	   $fp = fopen('../funciones_PHP/data.txt', 'w');
						fwrite($fp, $sql);
						fclose($fp);
			    	   $res=pg_query($connect, $sql) or die("Error insertando datos");
			    	   if($res)
			    	   {
			    	   		//echo "Update con exito";
			    	   		session_start();
					    	$_SESSION['consulta'] = "OK";
			    	    	header("location:../../PagWebII/formularios/out_propiedades.php"); 
			    	   }	

			    	 	
	    	    } 
		    	 else
		    	 {

			    	 $sql="insert into t_propiedades (f_descripcion,f_id_ubicacion,f_id_tipo_propiedad,f_direccion) 
							values
							('$desc','$ubicacion',$tipo,'$direccion')";
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
			    	    header("location:../../PagWebII/formularios/out_propiedades.php"); 
			    	 }	
		    	} 	
	    }
	    else
	    echo "<p><i>no conecte</i></p>";
	    pg_close($connect);
?>