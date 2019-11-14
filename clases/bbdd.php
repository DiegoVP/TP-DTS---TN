<?php

class BBDD{
  private $bbdd;

  public function __construct()  {
    $dsn="mysql:host=127.0.0.1;dbname=tp-dh;port=3306";
    $usuario = "root";
    $pass = "";
    $opciones = [];

    try {
      $this->bbdd = new PDO($dsn,$usuario,$pass,$opciones);
      $this->bbdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (\Exception $e) {
      var_dump($e->getMessage());
      echo ("<br> vuelve luego, los datos estan de huelga :/ ");
    }
  }

  public function registroUsuario($nombre,$apellido,$email,$usuario,$avatar,$contrasenia){
    $conect = $this->bbdd->prepare("INSERT INTO usuario (id,nombre,dni,email,usuario,contrasenia,avatar) VALUES DEFAULT, :nombre1,:dni1 ,:email1,:usuario1 , :contrasenia1,:avatar1 ");
    $conect->bindValue(":nombre1",$nombre);
    $conect->bindValue(":dni1",$apellido);
    $conect->bindValue(":email1",$email);
    $conect->bindValue(":usuario1",$usuario);
    $conect->bindValue(":contrasenia1", password_hash($contrasenia,PASSWORD_DEFAULT));
    $conect->bindValue(":avatar1",$avatar);
    $conect->execute();

    return $conect->lastInsertId();
  }
public function corrogorarLogin($email,$contrasenia){
        $consulta = $this->bbdd->query("SELECT * FROM users WHERE email = $email");
        $consulta->fetch(PDO::FETCH_ASSOC);
        if ($consulta["id"]){
      return password_verify($contrasenia,$consulta["contrasenia"]);
      return false;


        }

    }

}


 ?>
