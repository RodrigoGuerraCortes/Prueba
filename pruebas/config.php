<?php 

    $sghserver='localhost';
	$sghport='5432';
	$sghdbname='local';
	$sghuser='postgres';
	$sghpass='olivetylocal';
	
	
	$conn = pg_connect("host=$sghserver port=$sghport 
	dbname=$sghdbname user=$sghuser password=$sghpass"); 
	
    if(!$conn) { die('Problemas con la Conexi&oacute;n.'); } else{ echo "conectado correctamente";}
?>