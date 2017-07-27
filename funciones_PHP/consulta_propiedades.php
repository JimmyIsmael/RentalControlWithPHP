<?php header("Content-Type: application/xml; charset=utf-8"); ?>
 <?php 
 include '../funciones_PHP/conexion.php';
   if($connect)
      {
        if (isset($_POST['sql']))
        {
          $sql=$_POST['sql'];
          $fp = fopen('../funciones_PHP/data.txt', 'w');
          fwrite($fp, $_POST['sql']);
          fclose($fp);    
        }
  ?>
           <table class="table table-hover">
            <tr>
              <th></th>
              <th>ID</th>
              <th>Descripcion</th>
              <th>Tipo Propiedad</th>
              <th>Ubicacion</th>
              <th>Precio Alquiler</th>
            </tr>
                                              
          <?php $res=pg_query($connect, $sql) or die("Error en la consulta SQL");

           if($res)
           { 
             for ($i=0; $row = pg_fetch_array($res); $i++)  
              {?>
                <tr>
                  <td><?php echo  '<form action="../funciones_PHP/editar_propiedades.php" method="POST">  
                  <button class="btn btn-success">Editar</button>'.' <input type="hidden" name="id_user" value="'.$row[f_id].'"></form>'; ?></td>
                  <td><?php echo $row[f_id]; ?></td>
                  <td><?php echo $row[f_descripcion]; ?></td>
                  <td><?php echo $row[f_tipo_propiedad]; ?></td>
                  <td><?php echo $row[f_ubicacion]; ?></td>
                  <td><?php echo $row[f_precio_alquiler]; ?></td>
                </tr>
            <?php  } ?>
            </table>               
 <?php          
          }
      }
?>    
