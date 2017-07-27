<?php
        $host="127.0.0.1";
        $port="5432";
        $user="postgres";
        $pass="letmein";
        $dbname="db_gestion_alquileres";
        $connect = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");
    //pg_close($connect);
?>
