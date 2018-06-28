<?php
	require_once "validate.php";
  	require_once "usuarios.php";
  	require_once "conexion.php";

 	$errores = [
      "username" => [],
      "email" => [],
	  "password" => []
	];

	//$user = usuarioNuevo();

    //Username

    if(isset($_POST['username'])) {
	    $erroresEnNombreDeUsuario = validarUsername($_POST["username"]);

		if (empty($erroresEnNombreDeUsuario)) {
			$user["username"] = $_POST["username"];
		} else {
			$errores["username"] = $erroresEnNombreDeUsuario;
		}
	}


    //Password
    if(isset($_POST['password'])) {
	    $erroresEnPassword = validarPassword($_POST["password"], $_POST["confirmacion_password"]);

		if (empty($erroresEnPassword)) {
			$user["password"] = $_POST["password"];
		} else {
			$errores["password"] = $erroresEnPassword;
		}
	}
    //e-mail
	if(isset($_POST['email']) && isset($_POST['confirmacion_email'])) {
	    $erroresEnMail = validarEmail($_POST["email"], $_POST["confirmacion_email"]);

		if (empty($erroresEnMail)) {
			$user["email"] = $_POST["email"];
		} else {
			$errores["email"] = $erroresEnMail;
		}
	}

	// registro a base de datos
	if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && !huboErrores()) {


    	$c_nombre = $_POST['nombre'];
    	$c_apellido = $_POST['apellido'];
    	$c_email = $_POST['email'];
    	$c_usuario = $_POST['username'];
    	$c_password = $_POST['password'];

    	$sql = "INSERT into usuarios (nombre, apellido, usuario, email, password)
    			VALUES ('".$c_nombre."', '".$c_apellido."', '".$c_usuario."', '".$c_email."', '".$c_password."');";
    	mysqli_query($link,$sql) or die("Problemas en el sql".mysqli_error($link));
    	mysqli_close($link);

    	?> <meta http-equiv="refresh" content="0; url=login"> <?php


	}

?>

<!DOCTYPE html>
<html>
<head>
	<title> S-MART | Search, click, get it</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400,400i,700,700i,900" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://novativex.com/proyectos/smart/css/smart.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>
<body class="registro">
	<div class="container-fluid">
		<div class="logo">
			<a href="index.php"><img src="img/smart-negro.png" alt="logo"></a>
			<a href="faq"><i class="fa fa-question-circle-o" aria-hidden="true"></i></a>
		</div>
		<!-- Impresión de errores -->
		<?php if (huboErrores($errores)) { ?>
            <div class="boton-redondeado-cf f5">
                <ul>
                    <?php foreach($errores as $todosLosErrores) : ?>
                        <?php foreach($todosLosErrores as $error) : ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </ul>
            </div>
         <?php } ?>


	    <div class="registro">

			<div class="instruccion">
				<p>Completa los datos para comenzar...</p>
			</div>

      		<form class="formulario1" action="" method="post">
		        <label>
					<span>Nombre</span>
					<input type="text" class="form-control" id="nombre" name="nombre" value="<?php if(!empty ($_POST['nombre'])) echo addslashes($_POST['nombre']);?>" placeholder="Ingrese Nombre">
		        </label>
				<label>
					<span>Apellido</span>
		        	<input type="text" class="form-control" id="apellido" name="apellido" value="<?php if(!empty ($_POST['apellido'])) echo addslashes($_POST['apellido']);?>" placeholder="Ingrese Apellido">
				</label>
				<label>
					<span>Usuario</span>
		        	<input type="text" class="form-control" id="username" name="username" value="<?php if(!empty ($_POST['username'])) echo addslashes($_POST['username']);?>" placeholder="Ingrese su usuario">
				</label>
				<label>
					<span>E-mail</span>
					<input type="text" class="form-control" id="email" name="email" value="<?php if(!empty ($_POST['email'])) echo addslashes($_POST['email']);?>" placeholder="Ingrese su E-mail">
		      	</label>
				<label>
					<span>Confirme su e-mail</span>
					<input type="text" class="form-control" id="confirmacion_email" name="confirmacion_email" value="<?php if(!empty ($_POST['confirmacion_email'])) echo addslashes($_POST['confirmacion_email']);?>" placeholder="Confirme su e-mail">
		    	</label>
				<label>
					<span>Contraseña</span>
					<input type="password" class="form-control" id="password" name="password" value="">
				</label>
				<label>
					<span>Confirme su contraseña</span>
		        	<input type="password" name="confirmacion_password" value="">
				</label>

		        <button class="boton-redondeado-cf f2 fullwidth" type="submit" name="continuar">Continuar</button>
	      	</form>
	    </div>
  	</div>
</body>
</html>
