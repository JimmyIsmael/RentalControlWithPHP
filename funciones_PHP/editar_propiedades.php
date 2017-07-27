<?php 
session_start();
        include '../funciones_PHP/conexion.php';
        $_SESSION['id_user']=$_POST['id_user'];
        header("location:../../PagWebII/formularios/in_propiedades.php");
?>