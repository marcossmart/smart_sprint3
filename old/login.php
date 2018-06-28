<?php
	require_once('conexion.php');

	if(isset($_POST['username']) && isset($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$sql = "SELECT usuario, password, id, avatar FROM usuarios WHERE usuario = '".$username."' AND password = '".$password."'";
		$resultado = mysqli_query($link,$sql) or die("Problemas en el sql".mysqli_error($link));

		// obtengo datos de la bd
		$dato = mysqli_fetch_assoc($resultado);
		$usuario_id = $dato['id'];
		$avatar = $dato['avatar'];

		// esto me devuelve la cantidad de registros encontrados a la llamada a la base de datos
		$c = mysqli_num_rows($resultado);

		// si $c es igual a 1, esto significa que encontro un usuario con la misma contrasena que puse
		if($c != 0) {
			session_start();
			$_SESSION['id'] = $usuario_id;
			$_SESSION['usuario'] = $username;
			$_SESSION['password'] = $password;
			$_SESSION['avatar'] = $avatar;

			header("location:index");

			if(isset($_POST['recuerdame'])) {
				$tiempo =  time() + 6000;
				$cookie_n_username = "username";
				$cookie_username = $username;
				setcookie($cookie_n_username, $cookie_username, $tiempo);

				$cookie_n_password = "password";
				$cookie_password = $password;
				setcookie($cookie_n_password, $cookie_password, $tiempo);
			}
		} else {
			// si $c es igual a 0 no encontro ningun usuario con esa password, entonces redirijimos al login con un error
			header("location:login?error=1");
		}

    	mysqli_close($link);

	}
 ?>
<html>
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400,400i,700,700i,900" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://novativex.com/proyectos/smart/css/smart.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
</head>
<body class="login">
  <div class="container-fluid">
		<div class="logo">
			<a href="index"><img src="img/smart-negro.png" alt="logo"></a>
			<a href="faq"><i class="fa fa-question-circle-o" aria-hidden="true"></i></a>
		</div>
		<div class="bienvenido">
			<p>Bienvenido!</p>
		</div>
		<div class="login">
      <form class="formulario1" action="" method="post">
        <div class="usuario">
          	<label>
				<span>Usuario</span>
          		<input type="text" name="username" value="<?php if(isset($_COOKIE['username'])) { echo $_COOKIE['username']; } ?>" required>
			</label>
        </div>
        <div class="contraseña">
         	<label>
				<span>Contraseña</span>
          		<input type="password" name="password" value="<?php if(isset($_COOKIE['password'])) { echo $_COOKIE['password']; } ?>" required>
			</label>
        </div>
        <div class="recuerdame">
			<input type="checkbox" name="recuerdame"> Recuerdame
        </div>
        <div class="boton">
          <button class="boton-redondeado-cf f2 fullwidth" type="submit" name="ingresar">Ingresar</button>
        </div>
      </form>
    </div>
		<div class="botonParaRegistro">

			<a href="registro.php">¿Eres nuevo?</a>
		</div>
  </div>

</body>
</html>
