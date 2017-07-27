<?php
	include '../funciones_PHP/conexion.php'; //Incluyo la funcion que crea la conexion a la DB
	if($connect)
	{
	         $sql="select * from t_usuarios where f_correo='".$_POST['email']."' limit 1";
	         $fp = fopen('../funciones_PHP/data.txt', 'w');
	         fwrite($fp, $sql);
	         fclose($fp);

	    	 $res=pg_query($connect, $sql) or die("Error en la consulta SQL");
	    	 $reg=pg_num_rows($res);
	    	 if($reg > 0)
	    	 {
		      	$result=1;
		      	echo $result;
	    	 }

		 }		 	
?>