                            <?php 
                              include '../funciones_PHP/conexion.php';
                               if($connect)
                                  {
                                       $sql="select * from t_servicios";
                                       $res=pg_query($connect, $sql) or die("Error en la consulta SQL");
                                       $row = pg_fetch_array($res);
                                       if($res)
                                       { 
                                          while($row = pg_fetch_array($res))
                                          {
                                            echo'<OPTION VALUE="'.$row['f_id'].'">'.$row['f_descripcion'].'</OPTION>';
                                          }
                                       }    
                                  }
                            ?>