<?php

		$nombre='';
		$direccion='';
		$telefono='';
		$email='';
		$password='';
		$celular='';
		$cedula='';


		$nombre=$_POST['campo_nombre'];
		$direccion=$_POST['campo_direccion'];
		$telefono=$_POST['campo_telefono'];
		$email=$_POST['campo_email'];
		$password=$_POST['campo_pass'];
		$celular=$_POST['campo_celular'];
		$cedula=$_POST['campo_cedula'];



	    include '../funciones_PHP/conexion.php'; //Incluyo la funcion que crea la conexion a la DB
	    //include 'funciones_PHP/variables_sesion.php';
	    if($connect)
	    {
                $sql="select * from t_usuarios where f_correo='$email'";
		    	 $res=pg_query($connect, $sql) or die("Error en la consulta SQL");
		    	 $reg=pg_num_rows($res);
		    	 $row = pg_fetch_array ($res);
		    	 if($reg==1)
		    	 {
	 	                    session_start();
					     	$_SESSION['consulta'] = "FALLO";
			    	    	header("location:../../PagWebI/registro.php");
		    	 }
		    	 else
		    	 {

		    	 		$sql="insert into t_usuarios (f_nombre,f_direccion,f_telefono
						,f_correo,f_password,f_celular,f_identificacion) 
						values
						('$nombre','$direccion','$telefono','$email','$password',
						'$celular','$cedula')";
				    	 $res=pg_query($connect, $sql) or die("Error en la consulta SQL");
				    	 $reg=pg_num_rows($res);
				    	 $row = pg_fetch_array ($res);
				    	 if(!$res)
				    	 {
							   //echo "No se pudo realizar el registro";
							   header("location:../../PagWebII/registro.php");
				    	 }	
				    	 else
				    	 {
				    	 	session_start();
					    	$_SESSION['consulta'] = "OK";
				    	        //echo '<script language="javascript">alert("Registro realizado exitosamente, ahora puedes iniciar sesion en nuestra Plataforma de Pagos");</script>'; 
							    header("location:../../PagWebII/login.php");
				    	 }
		    	 }


		    	
	    }
	    else
	    echo "<p><i>no conecte</i></p>";
	    pg_close($connect);
?>