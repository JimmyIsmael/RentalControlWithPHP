<?php 
session_start();
        include '../funciones_PHP/conexion.php';
        $_SESSION['id']=$_POST['id_user'];
        header("location:../../PagWebII/formularios/in_servicios.php");
?>