<?php
	include '../funciones_PHP/conexion.php'; //Incluyo la funcion que crea la conexion a la DB
	if($connect)
	{
	         $sql="select f_descripcion from t_propiedades pro where pro.f_id='".$_POST['id']."' limit 1";
	         $fp = fopen('../funciones_PHP/data.txt', 'w');
	         fwrite($fp, $sql);
	         fclose($fp);

	    	 $res=pg_query($connect, $sql) or die("Error en la consulta SQL");
	    	 $reg=pg_num_rows($res);
	    	 if($res)
	    	 {
	    	 	$row = pg_fetch_array($res);
		      	$result=$row['f_descripcion'];
		      	echo $result;

	    	 }

		 }		 	
?>