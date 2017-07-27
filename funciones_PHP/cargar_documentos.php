<?php
		$email='';
		$password='';

		$email=$_POST['campo_email'];
		$password=$_POST['campo_pass'];

	    include '../funciones_PHP/conexion.php'; //Incluyo la funcion que crea la conexion a la DB
	    //include 'funciones_PHP/variables_sesion.php';
	    if($connect)
	    {
		    	 $sql="select * from public.t_usuarios u where u.f_correo='$email' and u.f_password='$password'";
		    	 $res=pg_query($connect, $sql) or die("Error en la consulta SQL");
		    	 $reg=pg_num_rows($res);
		    	 $row = pg_fetch_array ($res);
		    	//if($email==$row["f_email"] && $pass==$row["f_pass"])
		    	 if($reg==1)
		    	 {


				        if($row["f_administrador"]==false)
				        {
				        	header("location:../../PagWebI/formularios/qry_banking.php");
					        session_start();
					        $_SESSION['estado'] = "OK";
					        $_SESSION['id']=$row['f_id_usuario'];
					        $_SESSION['nombre']=$row['f_nombre'];
					      //$_SESSION['apellido']=$row['f_apellido'];
					        $_SESSION['email']=$row['f_correo'];
					        $_SESSION['password']=$row['f_password'];
					        //$_SESSION['puesto']=$row['f_puesto'];
					        $_SESSION['consulta']="NO";
					        $_SESSION['administrador']="false";
				        }
				        else
				        {
				        	header("location:../../PagWebI/inicio.php");
				        	session_start();
					        $_SESSION['estado'] = "OK";
					         $_SESSION['id']=$row['f_id_usuario'];
					        $_SESSION['nombre']=$row['f_nombre'];
					      //$_SESSION['apellido']=$row['f_apellido'];
					        $_SESSION['email']=$row['f_correo'];
					        $_SESSION['password']=$row['f_password'];
					        //$_SESSION['puesto']=$row['f_puesto'];
					        $_SESSION['consulta']="NO";
					        $_SESSION['administrador']="true";
				        }

					    
		    	 }	
		    	 else
		    	 {
		    	     header("location:../../PagWebI/login.php");

		    	 }	 	
	    }
	    else
	    echo "<p><i>no conecte</i></p>";
	    pg_close($connect);
?>