<?php
	const SERVER = "localhost";
	const USUARIO = "root";
	const CLAVE = "";
	const BASE = "akreg_smart";
	$link = mysqli_connect(SERVER,USUARIO,CLAVE,BASE) or
	    die("Problemas con la conexión");
	mysqli_set_charset($link, "utf8");
?>
