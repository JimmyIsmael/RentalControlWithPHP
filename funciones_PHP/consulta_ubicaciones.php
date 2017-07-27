 <?php 
 include '../funciones_PHP/conexion.php';
   if($connect)
      {
        if (isset($_POST['valor']))
        {
          $sql="select * from t_ubicaciones where f_descripcion ilike '%".$_POST['valor']."%'";    
        }
        else
        {
           $sql="select * from t_ubicaciones "; 
        }
  ?>
           <table class="table table-hover">
              <tr>
                <th></th>
                <th>ID</th>
                <th>Descripcion</th>
              </tr>
                                              
          <?php $res=pg_query($connect, $sql) or die("Error en la consulta SQL");
           if($res)
           { 
             for ($i=0; $row = pg_fetch_array($res); $i++)  
              {?>
                <tr>
                  <td><?php echo  '<form action="../funciones_PHP/editar_ubicaciones.php" method="POST">  
                  <button class="btn btn-success">Editar</button>'.' <input type="hidden" name="id_user" value="'.$row[f_id].'"></form>'; ?></td>
                  <td><?php echo $row[f_id]; ?></td>
                  <td><?php echo $row[f_descripcion]; ?></td>
                </tr>
            <?php  } ?>

            </table>  

              
 <?php          }
      }
?>    