<?php
class Validador{

  public function estaVacio($campo){
      return $campo == "";
  }

  public function validarNombre($nombre){
    if($this->estaVacio($nombre))  {
        return "Complete el campo con su nombre.";
    }
    else if(strlen($_POST["nombre"]) < 2){
        return "Su nombre debe tener al menos 2 caracteres";
    }
  return "OK";
  }

  public function validarApellido($apellido){
    if($this->estaVacio($apellido))  {
      return "Complete el campo con su apellido.";
    }
  return "OK";
  }

  public function validarEmail($email){
    if($this->estaVacio($email))  {
      return "Complete su direccion de e-mail";
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      return "Su direccion de correo no es valida";
    }
  return "OK";
  }

  public function validarUsername($user){
    if($this->estaVacio($user))  {
        return  "Elija su nombre de Usuario.";
    }
    else if(strlen($user) < 2)  {
        $datos["username"] = "Su nombre de usuario debe ser más extenso.";
    }
  return "OK";
  }

  public function validarAvatar($imagen){
    if(isset($imagen["avatar"])){
        $tipoImagen = $imagen['avatar']['type'];
        $avatarAdress = "";
        if( $tipoImagen == 'image/png' ||
            $tipoImagen == 'image/jpg' ||
            $tipoImagen == 'image/jpeg' ||
            $tipoImagen == 'image/gif'){
            $ext = pathinfo($imagen['avatar']['name'],  PATHINFO_EXTENSION);
            $avatarAdress = 'fotos/' . $datos['email'] . '.' . $ext;
            return "OK";
        }else{
            return "El formato debe ser png, jpg o gif";
        }
      }
  }

  public function validarContrasenia($pass,$confirm){
    if(strlen($pass)<6){
      return "La clave debe tener al menos 6 caracteres";
    }else
     if(strlen($pass) > 16)  {
          return "La clave no puede tener más de 16 caracteres";
    }
    if (!preg_match('`[a-z]`',$pass))  {
        return "La clave debe tener al menos una letra minúscula";
    }
    if (!preg_match('`[A-Z]`',$pass))  {
        return "La clave debe tener al menos una letra mayúscula";
    }
    if (!preg_match('`[0-9]`',$pass))  {
        return "La clave debe tener al menos un caracter numérico";
    }
    if($pass != $confirm)  {
        return "Las contraseñas deben coincidir";
    }
    return "OK";
  }

  public function tieneFormatoEmail($email){
      return filter_var($email, FILTER_VALIDATE_EMAIL);
  }

  public function validarDatosLogin($email,$pass){
      if($this->estaVacio($email) || $this->estaVacio($pass)){
          return "Los campos son obligatorios.";
      }else if(!$this->tieneFormatoEmail($email)){
          return "El email es inválido.";
      }
      return "";
  }






}

 ?>
