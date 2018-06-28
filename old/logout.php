<?php
	session_start();
	session_destroy();
	// hacemos un delay de 3 seg y redireccionamos a index

	header("refresh:0; index.php");
?>
