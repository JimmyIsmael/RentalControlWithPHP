<?php
	include '../funciones_PHP/conexion.php'; //Incluyo la funcion que crea la conexion a la DB
	if($connect)
	{
	         $sql="select sec.f_descripcion||'----'||pro.f_descripcion as f_seccion from t_secciones sec, t_propiedades pro where sec.f_id_propiedad=pro.f_id and sec.f_id='".$_POST['id']."' limit 1";
	         $fp = fopen('../funciones_PHP/data.txt', 'w');
	         fwrite($fp, $sql);
	         fclose($fp);

	    	 $res=pg_query($connect, $sql) or die("Error en la consulta SQL");
	    	 $reg=pg_num_rows($res);
	    	 if($res)
	    	 {
	    	 	$row = pg_fetch_array($res);
              	//$id_ubicacion=$row['f_id_ubicacion'];
		      	$result=$row['f_seccion'];

		      	echo $result;

	    	 }

		 }		 	
?>