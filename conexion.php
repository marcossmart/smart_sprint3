<?php
	
	$dsn = 'mysql:host=127.0.0.1;dbname=smart2;port=3306';
	$db_user = 'root';
	$db_pass = '';
	$opt = [ PDO::ATTR_ERRMODE
	 => PDO::ERRMODE_EXCEPTION ];
	$link = new PDO($dsn, $db_user, $db_pass, $opt);

	
?>