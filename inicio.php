
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
  <?php include 'include/header-comun.php'?>
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
       <?php include 'include/barra-superior-comun.php' ?> <!-- Dentro de este include estan las variables de sesion -->
       <!-- Aqui se incluye el archivo php para la de navegacion lateral (menu) -->
       <?php include 'include/menu-comun.php' ?>
      <!-- Aqui se incluye el archivo php para la de navegacion lateral (menu) -->
       <?php include 'include/nombre-comp.php' ?>
      <!-- Aqui se incluye el archivo php para el dashboard -->
       <!-- Aqui se incluye el archivo php para el dashboard -->

       
      <!-- Aqui se incluye el archivo php para el footer -->
      <?php include 'include/footer-comun.php' ?> 
      <!-- Aqui se incluye el archivo php para los modales -->
      <?php include 'include/modales-comun.php' ?>   
  </body>
</html>