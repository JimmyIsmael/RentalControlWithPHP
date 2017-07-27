<?php
    session_start();
    session_destroy();
    header("location:../../AdminLTE-2.2.0/login.php");
?>