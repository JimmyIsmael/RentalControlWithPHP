<?php
        $usuario=$_POST['id'];
		$detalle=$_POST['detalle'];
		$seccion=$_POST['seccion'];
		$servicio=$_POST['servicio'];
		$tipo_pago=$_POST['tipo_pago'];
		$monto=$_POST['monto'];
		$fecha=$_POST['fecha'];
		$mes=$_POST['mes'];
		$result="";

		
	    include '../funciones_PHP/conexion.php'; //Incluyo la funcion que crea la conexion a la DB
	    //include 'funciones_PHP/variables_sesion.php';
	    if($connect)
	    {
		    	 $sql="insert into t_pagos (f_id_usuario,f_id_seccion,t_tipo_pago,f_detalle,f_fecha) 
						values
						('$usuario','$seccion','$tipo_pago','$detalle','$fecha')";
		 $fp = fopen('../funciones_PHP/data.txt', 'w');
				         fwrite($fp, $sql);
				         fclose($fp);
		    	 $res=pg_query($connect, $sql) or die("Error en la consulta SQL");
		    	 $reg=pg_num_rows($res);
		    	 $row = pg_fetch_array ($res);
		    	 if($res)
		    	 {
		    	 	 $sql="insert into t_detalle_pago (f_id_pago,f_monto,f_id_mes) 
						values
						((select f_id from t_pagos order by f_id desc limit 1),'$monto','$mes')";

					     $fp = fopen('../funciones_PHP/data1.txt', 'w');
				         fwrite($fp, $sql);
				         fclose($fp);

				    	 $res=pg_query($connect, $sql) or die("Error en la consulta SQL");
				    	 $reg=pg_num_rows($res);
				    	 $row = pg_fetch_array ($res);
				    	 if($res)
				    	 {
				    	 	$result="1";
				    	 	echo $result;

				    	 }
		    	 }	
		    	 else
		    	 {
		    	 	$result="0";
				   	echo $result;
		    	 }	 	
	    }
	    else
	    echo "<p><i>no conecte</i></p>";
	    pg_close($connect);
?>