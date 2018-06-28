<?php
    //Validación de usuario
    function validarUsername($username) {
      $errors = [];

      if(! isset($username)) {
        $errors[]= "Por favor complete el nombre de usuario";
      }
      if(strlen($username >= 5)) {
        $errors[]="El nombre de usuario debe contener al menos 5 caracteres";
      }
      if(!ctype_alnum($username)) {
        $errors = "El nombre de usuario debe contener caracteres alfanuméricos";
      }
    return $errors;
    }

    //Validación de Password
    function validarPassword($password, $confirmation) {

        $errors = [];

        if (! isset($password)) {
            $errors[] = "Por favor complete el campo contraseña";
        }
        if (strlen($password >= 5)) {
            $errors[] = "La longitud del contraseña debe ser mayor o igual a 5 caracteres";
        }
        if ($password != $confirmation) {
            $errors[] = "Las contraseñas ingresadas son distintas";
        }
          return $errors;
        }

    //validar e-mail
    function validarEmail($email, $confirmation) {
        $errors = [];

        if (! isset($email)) {
            $errors[] = "Por favor complete el campo e-mail";
        }
              if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "El mail ingresado no es valido";
        }
        if ($email != $confirmation) {
            $errors[] = "Los mails ingresados son distintos";
        }
        return $errors;
    }

    function huboErrores ($arrayDeErrores) {
    foreach ($arrayDeErrores as $errores) {
        if (! empty($errores)) {
            return true;
        }
    }

    return false;
}
 ?>
