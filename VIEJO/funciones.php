<?php
function validarRegistro($datos,$imagen){

  $contrasenia = "";
  $avatarAdress="";
  $errores = false;

  //NOMBRE
    if($datos["nombre"] == "")  {
        $datos["nombre"] = "Complete el campo con su nombre.";
        $errores = true;
    }
    else if(strlen($datos["nombre"]) < 2){
        $datos["nombre"] = "Su nombre debe tener al menos 2 caracteres";
        $errores = true;
    }

  //APELLIDO
    if($datos["apellido"] == "")  {
        $datos["apellido"] = "Complete el campo con su apellido.";
        $errores = true;
    }

  //EMAIL
    if($datos["email"] == "")  {
        $datos["email"] = "Complete su direccion de e-mail";
        $errores = true;
    }
    else if(!filter_var($datos["email"], FILTER_VALIDATE_EMAIL)){
        $datos["email"] = "Su direccion de correo no es valida";
        $errores = true;
    }

  //USERNAME
    if($datos["username"] == "")  {
        $datos["username"] = "Elija su nombre de Usuario.";
        $errores = true;
    }
    else if(strlen($datos["username"]) < 2)  {
        $datos["username"] = "Su nombre de usuario debe ser más extenso.";
        $errores = true;
    }

  //AVATAR
    if(isset($imagen["avatar"])){
        $tipoImagen = $imagen['avatar']['type'];
        $avatarAdress = "";
        if( $tipoImagen == 'image/png' ||
            $tipoImagen == 'image/jpg' ||
            $tipoImagen == 'image/jpeg' ||
            $tipoImagen == 'image/gif'){
            $ext = pathinfo($imagen['avatar']['name'],  PATHINFO_EXTENSION);
            $avatarAdress = 'fotos/' . $datos['email'] . '.' . $ext;
        }else{
            $datos[] = ["validacion_imagen" => "El formato debe ser png, jpg o gif"];
            $errores = true;
        }
    }


  //PASSWORD
    if(strlen($datos["password"])< 6)  {
        $datos["password"] = "La clave debe tener al menos 6 caracteres";
        $errores =true;
    }else if(strlen($datos["password"]) > 16)  {
          $datos["password"] = "La clave no puede tener más de 16 caracteres";
          $errores =true;
    }

    if (!preg_match('`[a-z]`',$datos["password"]))  {
        $datos["password"] = "La clave debe tener al menos una letra minúscula";
        $errores =true;
    }
    if (!preg_match('`[A-Z]`',$datos["password"]))  {
        $datos["password"] = "La clave debe tener al menos una letra mayúscula";
        $errores =true;
    }
    if (!preg_match('`[0-9]`',$datos["password"]))  {
        $datos["password"] = "La clave debe tener al menos un caracter numérico";
        $errores =true;
    }
    if($datos["password"] != $datos["passwordConfirm"])  {
        $datos["password"] = "Las contraseñas deben coincidir";
        $datos["passwordConfirm"] = "Las contraseñas deben coincidir";
        $errores = true;
    }
    else  {
        $contrasenia = password_hash($datos["password"],PASSWORD_DEFAULT);
    }


  //SI ESTA CORRECTO
    if(!$errores)  {

      //RECORDARME
        if(isset($datos["recordarme"])){
          if($datos["recordarme"] != null){
          $auxusername=$datos["username"];
            setcookie("username","$auxusername", time() + 60 * 60* 24 );
          }
        }

        $usuario = [
          "nombre" => $datos["nombre"],
          "apellido" => $datos["apellido"],
          "email" => $datos["email"],
          "username" => $datos["username"],
          "password" => $contrasenia,
          "avatarAdress" => $avatarAdress,
          "activo" => 1
        ];
  // Guardo de usuario en json
        $usuariosEnJSON = file_get_contents("usuarios.json");
        $usuarios = json_decode($usuariosEnJSON);
        $usuarios[] = $usuario;
        $nuevosUsuariosEnJSON = json_encode($usuarios);
        file_put_contents("usuarios.json",$nuevosUsuariosEnJSON);

  // Guardo de imagen
        move_uploaded_file($imagen['avatar']['tmp_name'], $avatarAdress);


  //INICIA SESSION
        $_SESSION["username"] = $datos["username"];
        header("Location:index.php");
      exit;
    }
  return $datos;
}

function validarLogin($datos){
  $usuariosEnJSON = file_get_contents("usuarios.json");
  $usuarios = json_decode($usuariosEnJSON,true);
  foreach($usuarios as $usuario){
    if($usuario["email"] == $datos["email"]){
        if(password_verify($datos["password"],$usuario["password"])){
            if($datos["recordarme"] != null){
                $username=$usuario["username"];
                setcookie("username", "$username", time() + 60 * 60* 24 );
                var_dump($_COOKIE);
            }
            //INICIA SESSION
            session_start();
            $_SESSION["username"] = $usuario["username"];
            header("Location:index.php");
            exit;
        }
    }
  }
  return "Los datos son invalidos";
}
