<?php 
function llenar_combo_dos_campos($tabla)
{
  if($connect)
    {
         $sql="select * from ".'$tabla';
         $res=pg_query($connect, $sql) or die("Error en la consulta SQL");
         if($res)
         { 
            while($row = pg_fetch_array($res))
            {
              echo'<OPTION VALUE="'.$row['f_id'].'">'.$row['f_descripcion'].'</OPTION>';
            }
         }  
    }
}
 ?>