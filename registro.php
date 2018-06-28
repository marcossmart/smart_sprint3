<?php
	//error_reporting(E_NOTICE);
  	require_once "conexion.php";
  	require_once "objetos/usuario.php";

 	$errores = [
      "email" => [],
	  "password" => []
	];

    //registrar
	$hayErrores = false;

    if($_REQUEST) {
    	$user = $_REQUEST['user'];
    	$name = $_REQUEST['name'];
    	$lastname = $_REQUEST['lastname'];
    	$email = $_REQUEST['email'];
    	$email_confirm = $_REQUEST['email_confirm'];
    	$password = $_REQUEST['password'];
    	$password_confirm = $_REQUEST['password_confirm'];

    	if($password != $password_confirm) {
    		$errores['password'][] = "Las contraseñas no coinciden.";
    	}
    	if($email != $email_confirm) {
    		$errores['email'][] = "Los email no coinciden.";
    	}

    	// errores de confirmacion de password y de email.
	    foreach ($errores as $error) {
	        if (! empty($error)) {
	            $hayErrores = true;
	        }
	    }

    	$usuario = new Usuario($name, $lastname, $email, $user, $password);

    	//echo '<pre>' , var_dump($usuario) , '</pre>';

    	if(!$hayErrores) {
	    	if(!$usuario->huboErrores()) {
	    		$usuario->registrarUsuario();
    		}
    	}
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
<body class="fondoRegistro">
<section class="registro-fondo">
	<div class="container-fluid">
		<div class="logo">
			<a href="index.php"><img src="img/smart-negro.png" alt="logo"></a>
			<a href="faq"><i class="fa fa-question-circle-o" aria-hidden="true"></i></a>
		</div>
		
		<?php if ($hayErrores) { ?>
            <div class="boton-redondeado-cf f5">
                <ul>
					<?php $usuario->getErrores(); ?>
					
					<?php 
					foreach($errores as $campo => $todosErrores) {
				        foreach ($todosErrores as $error) {
				          echo "<li>".$error."</li>";
				        }
			      	}
			      	?>

                </ul>
            </div>
         <?php } ?>


	    <div class="registro">

			<div class="instruccion">
				<p>Completa los datos para comenzar...</p>
			</div>
			
      		<form class="formulario1" action="" method="post">
		        <section class="i1">
			        <label>
						<span>Nombre</span>
						<input type="text" class="form-control" id="nombre" name="name" value="<?php if(!empty ($_REQUEST['name'])) echo addslashes($_REQUEST['name']);?>" placeholder="Ingrese Nombre" require>
			        </label>
					<label>
						<span>E-mail</span>
						<input type="text" class="form-control" id="email" name="email" value="<?php if(!empty ($_REQUEST['email'])) echo addslashes($_REQUEST['email']);?>" placeholder="Ingrese su E-mail" require>
			      	</label>
					<label>
						<span>Contraseña</span>
						<input type="password" class="form-control" id="password" name="password" value="" placeholder="*******"  require>
					</label>
					<label>
						<span>Usuario</span>
			        	<input type="text" class="form-control" id="username" name="user" value="<?php if(!empty ($_REQUEST['user'])) echo addslashes($_REQUEST['user']);?>" placeholder="Ingrese su usuario"  require>
					</label>
		      	</section>
		      	<section class="i2">
					<label>
						<span>Apellido</span>
			        	<input type="text" class="form-control" id="apellido" name="lastname" value="<?php if(!empty ($_REQUEST['lastname'])) echo addslashes($_REQUEST['lastname']);?>" placeholder="Ingrese Apellido" require>
					</label>
					<label>
						<span>Confirme su e-mail</span>
						<input type="text" class="form-control" id="confirmacion_email" name="email_confirm" value="<?php if(!empty ($_REQUEST['email_confirm'])) echo addslashes($_REQUEST['email_confirm']);?>" placeholder="Confirme su e-mail" require>
			    	</label>
					<label>
						<span>Confirme su contraseña</span>
			        	<input type="password" name="password_confirm" value="" placeholder="*******" require>

			        	<button class="boton-redondeado-cf f2 fullwidth" type="submit" name="continuar">Continuar</button>
					</label>
				</section>

		        
	      	</form>
	    </div>
  	</div>
</section>
</body>
</html>
