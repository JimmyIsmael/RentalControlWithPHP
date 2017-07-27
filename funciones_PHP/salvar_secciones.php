<?php
		//$apellido='';
		$id="";
		$desc='';
		$tipo='';
		$alquiler='';

		

		$id=$_POST['id'];
		$desc=$_POST['desc'];
		$tipo=$_POST['tipo'];
		$alquiler=$_POST['alquiler'];
		$propiedad=$_POST['pro'];

		
	    include '../funciones_PHP/conexion.php'; //Incluyo la funcion que crea la conexion a la DB
	    //include 'funciones_PHP/variables_sesion.php';
	    if($connect)
	    {

	    	if ($id!="")
	    	    {
			    	   $sql="update public.t_secciones  SET f_descripcion = '$desc',f_id_propiedad='$propiedad',
			    	   		f_id_tipo=$tipo,f_alquiler='$alquiler' WHERE f_id = '$id'";

			    	   $fp = fopen('../funciones_PHP/data.txt', 'w');
						fwrite($fp, $sql);
						fclose($fp);
			    	   $res=pg_query($connect, $sql) or die("Error insertando datos");
			    	   if($res)
			    	   {
			    	   			$result="1";
		      					echo $result;
			    	   		//session_start();
					    	//$_SESSION['consulta'] = "OK";
			    	    	//header("location:../../PagWebII/formularios/out_propiedades.php"); 
			    	   }	

			    	 	
	    	    } 
		    	 else
		    	 {

			    	 $sql="insert into t_secciones (f_descripcion,f_id_tipo,f_alquiler,f_id_propiedad) 
							values
							('$desc',$tipo,'$alquiler','$propiedad')";
			    	 $res=pg_query($connect, $sql) or die("Error en la consulta SQL");
			    	 $reg=pg_num_rows($res);
			    	 $row = pg_fetch_array ($res);
			    	 if(!$res)
			    	 {
						  
						   //header("location:../../PagWebII/login.php");
			    	 	$result="0";
		      					echo $result;
			    	 }	
			    	 else
			    	 {
			    	 	$result="2";
		      					echo $result;
			    	 	//session_start();
					    //$_SESSION['consulta'] = "OK";
			    	    //header("location:../../PagWebII/formularios/out_propiedades.php"); 
			    	 }	
		    	} 	
	    }
	    else
	    echo "<p><i>no conecte</i></p>";
	    pg_close($connect);
?>