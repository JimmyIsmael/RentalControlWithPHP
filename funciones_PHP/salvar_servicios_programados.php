<?php

		session_start();
        if($_SESSION["estado"]!="OK"){
          header("location:../../AdminLTE-2.2.0/login.php");}
        
        $estado=$_SESSION['estado'];
        $nombre=$_SESSION['nombre'];
       // $apellido=$_SESSION['apellido'];
        $email=$_SESSION['email'];
        $password=$_SESSION['password'];
       // $puesto=$_SESSION['puesto'];
        $consulta=$_SESSION['consulta'];
        $administrador=$_SESSION['administrador']; 
        $usuario=$_SESSION['id'];

	$id_usuario='';
	$id_documento='';
	$detalle_documento='';
	$empresa='';
	$servicio='';
	$monto='';
	$dia_compromiso='';
	$forma_pago='';


	$id_usuario=$_SESSION['id'];
	$id_documento=$_POST['campo_id'];
	$detalle_documento=$_POST['campo_detalle'];  
	$empresa=$_POST['campo_empresa'];
	$servicio=$_POST['campo_servicio'];
	$monto=$_POST['campo_monto'];  
	$dia_compromiso=$_POST['campo_compromiso'];
	$forma_pago=$_POST['campo_forma_pago'];


	    include '../funciones_PHP/conexion.php'; //Incluyo la funcion que crea la conexion a la DB
	    //include 'funciones_PHP/variables_sesion.php';
	    if($connect)
	    {
	    	    if (isset($id_servicio))
	    	    {
		    	     $sql="select * from public.t_servicios_programados where f_id='$id_documento'";
			    	 $res=pg_query($connect, $sql) or die("Error en la consulta SQL");
			    	 $reg=pg_num_rows($res);
			    	 $row = pg_fetch_array ($res);
			    	 if($reg==1)
			    	 {
			    	   $sql="update public.t_servicios_programados  SET f_detalle = '$detalle_documento' , f_id_empresa='$empresa', f_id_servicio='$servicio'
			    	   f_id_usuario='$id_usuario' , f_monto='$monto' , f_forma_pago='$forma_pago',f_dia_compromiso='$dia_compromiso' 
			    	   WHERE f_id = '$id_documento'";
			    	   $res=pg_query($connect, $sql) or die("Error insertando datos");
			    	   if($res)
			    	   {
			    	   		//echo "Update con exito";
			    	   		session_start();
					    	$_SESSION['consulta'] = "OK";
			    	    	header("location:../../PagWebI/formularios/in_documentos.php"); 
			    	   }	

			    	 }	
	    	    } 
		    	 else
		    	 {
		    	   $sql="insert into public.t_servicios_programados (f_detalle,f_id_usuario,f_monto,
		    	   	f_id_empresa,f_id_servicio,f_forma_pago,f_dia_compromiso) 
		    	   values 
		    	   ('$detalle_documento','$id_usuario','$monto','$empresa','$servicio','$forma_pago','$dia_compromiso')";
		    	   echo $sql ;
		    	   $res=pg_query($connect, $sql) or die("Error insertando datos"); 
		    	   if($res)
		    	   {
		    	   		//echo "Insert con exito";
		    	   		session_start();
				    	$_SESSION['consulta'] = "OK";
		    	    	header("location:../../PagWebI/formularios/in_documentos.php"); 
		    	   }	
		    	 }	 	
	    }
?>