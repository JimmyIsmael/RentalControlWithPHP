 <?php 
 include '../funciones_PHP/conexion.php';
   if($connect)
      {
        if (isset($_POST['sql']))
        {
          $sql=$_POST['sql'];    
        }
  ?>
           <table class="table table-hover">
              <tr>
                <th></th>
                <th>ID</th>
                <th>Nombre</th>
                <th>Tipo Usuario</th>
                <th>Celular</th>
                <th>Email</th>
              </tr>
                                              
          <?php $res=pg_query($connect, $sql) or die("Error en la consulta SQL");
           if($res)
           { 
             for ($i=0; $row = pg_fetch_array($res); $i++)  
              {?>
                <tr>
                 
                  <td><?php echo  '<form action="../funciones_PHP/editar_usuario.php" method="POST">  
                  <button class="btn btn-success">Editar</button>'.' <input type="hidden" name="id_user" value="'.$row[f_id_usuario].'"></form>'; ?></td>
                  <td><?php echo $row[f_id_usuario]; ?></td>
                  <td><?php echo $row[f_nombre]; ?></td>
                  <td><?php echo $row[tipo_usuario]; ?></td>
                  <td><?php echo $row[f_celular]; ?></td>
                  <td><?php echo $row[f_correo]; ?></td>
                  
  
                </tr>
            <?php  } ?>

            </table>  

              
 <?php          
          }
      }
?>    
