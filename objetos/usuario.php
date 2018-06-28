
<?php

  class Usuario{

    private $name;
    private $lastname;
    private $mail;
    private $user;
    private $password;
    private $errores = [
      "username" => [],
      "email" => [],
      "password" => []
    ];

    public function __construct($name, $lastname, $mail, $user, $password){
      $this->setName($name);
      $this->setLastName($lastname);
      $this->setMail($mail);
      $this->setUser($user);
      $this->setPassword($password);
    }

    //GETTERS
    public function getName(){
      return $this->name;
    }

    public function getLastName(){
      return $this->lastname;
    }

    public function getMail(){
      return $this->mail;
    }

    public function getUser(){
      return $this->user;
    }

    public function getPassword(){
      return $this->password;
    }

    public function getErrores() {
      foreach($this->errores as $campo => $errores) {
        foreach ($errores as $error) {
          echo "<li>".$error."</li>";
        }
      }
    }

    //SETTERS

    public function setName($name){
      $this->name = $name;
    }

    public function setUser($user){
      if(!isset($user)) {
        $this->errores['username'][] = "Por favor complete el nombre de usuario";
      }
      if(strlen($user) <= 3) {
        $this->errores['username'][] = "El nombre de usuario debe contener al menos 3 caracteres";
      } 
      else {
        $this->user = $user;
      }
    }

    public function setLastName($lastname){
      $this->lastname = $lastname;
    }

    public function setPassword($password){
      if (strlen($password)>=5){
        $this->password = password_hash($password, PASSWORD_BCRYPT);
      } else {
        $this->errores['password'][] = 'El password debe tener al menos 5 caracteres.';
      }
    }

    public function setMail($mail){
      if(!$mail) {
        $this->errores['email'][] = 'Por favor complete el campo e-mail.';
      }
      if (filter_var($mail, FILTER_VALIDATE_EMAIL)){
        $this->mail = $mail;
      }
    }

    // methods
    public function huboErrores() {
      foreach ($this->errores as $this->array) {
        if (! empty($array)) {
            return true;
        }
      }
      return false;
    }

    public function registrarUsuario() {
      global $link;

      $sql = $link->query("INSERT into usuarios (nombre, apellido, usuario, email, password)
          VALUES ('".$this->getName()."', '".$this->getLastName()."', '".$this->getUser()."', '".$this->getMail()."', '".$this->getPassword()."');");
    }


  }
 ?>
