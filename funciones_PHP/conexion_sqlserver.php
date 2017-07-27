<?php
	$link=mssql_connect("daite.ddns.net", "paginaweb",  "paginaweb") or die ('No hubo conexión con la base de datos:' . mssql_error());
	mssql_select_db ("gestionfinanciera"); 

?>
