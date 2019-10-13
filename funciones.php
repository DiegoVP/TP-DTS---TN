<?php
function validarRegistro($datos,$imagen){
  $_FILES=$imagen;
  $_POST=$datos;
  $contrasenia = "";
  $avatarAdress="";
  $errores = false;

  //NOMBRE
    if($_POST["nombre"] == "")  {
        $_POST["nombre"] = "Complete el campo con su nombre.";
        $errores = true;
    }
    else if(strlen($_POST["nombre"]) < 2){
        $_POST["nombre"] = "Su nombre debe tener al menos 2 caracteres";
        $errores = true;
    }

  //APELLIDO
    if($_POST["apellido"] == "")  {
        $_POST["apellido"] = "Complete el campo con su apellido.";
        $errores = true;
    }

  //EMAIL
    if($_POST["email"] == "")  {
        $_POST["email"] = "Complete su direccion de e-mail";
        $errores = true;
    }
    else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        $_POST["email"] = "Su direccion de correo no es valida";
        $errores = true;
    }

  //USERNAME
    if($_POST["username"] == "")  {
        $_POST["username"] = "Elija su nombre de Usuario.";
        $errores = true;
    }
    else if(strlen($_POST["username"]) < 2)  {
        $_POST["username"] = "Su nombre de usuario debe ser más extenso.";
        $errores = true;
    }

  //AVATAR
    if(isset($_FILES["avatar"])){
        $tipoImagen = $_FILES['avatar']['type'];
        $avatarAdress = "";
        if( $tipoImagen == 'image/png' ||
            $tipoImagen == 'image/jpg' ||
            $tipoImagen == 'image/jpeg' ||
            $tipoImagen == 'image/gif'){
            $ext = pathinfo($_FILES['avatar']['name'],  PATHINFO_EXTENSION);
            $avatarAdress = 'fotos/' . $_POST['email'] . '.' . $ext;
        }else{
            $_POST[] = ["validacion_imagen" => "El formato debe ser png, jpg o gif"];
            $errores = true;
        }
    }


  //PASSWORD
    if(strlen($_POST["password"]) < 6)  {
        $_POST["password"] = "La clave debe tener al menos 6 caracteres";
        $errores =true;
    }
    if(strlen($_POST["password"]) > 16)  {
        $_POST["password"] = "La clave no puede tener más de 16 caracteres";
        $errores =true;
    }
    if (!preg_match('`[a-z]`',$_POST["password"]))  {
        $_POST["password"] = "La clave debe tener al menos una letra minúscula";
        $errores =true;
    }
    if (!preg_match('`[A-Z]`',$_POST["password"]))  {
        $_POST["password"] = "La clave debe tener al menos una letra mayúscula";
        $errores =true;
    }
    if (!preg_match('`[0-9]`',$_POST["password"]))  {
        $_POST["password"] = "La clave debe tener al menos un caracter numérico";
        $errores =true;
    }
    if($_POST["password"] != $_POST["passwordConfirm"])  {
        $_POST["password"] = "Las contraseñas deben coincidir";
        $_POST["passwordConfirm"] = "Las contraseñas deben coincidir";
        $errores = true;
    }
    else  {
        $contrasenia = password_hash($_POST["password"],PASSWORD_DEFAULT);
    }

  //RECORDARME
    if($_POST["recordarme"] != null){
        setcookie("username","$_POST["username"]", time() + 60 * 60* 24 );
    }
  //SI ESTA CORRECTO
    if(!$errores)  {

        $usuario = [
          "nombre" => $_POST["nombre"],
          "apellido" => $_POST["apellido"],
          "email" => $_POST["email"],
          "username" => $_POST["username"],
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
        move_uploaded_file($_FILES['avatar']['tmp_name'], $avatarAdress);


  //INICIA SESSION
        $_SESSION["username"] = $_POST["username"];
        header("Location:index.php");
      exit;
    }
  return $_POST;
}

function validarLogin($datos){
  $_POST=$datos;
  $usuariosEnJSON = file_get_contents("usuarios.json");
  $usuarios = json_decode($usuariosEnJSON,true);
  foreach($usuarios as $usuario){
    if($usuario["email"] == $_POST["email"]){
        if(password_verify($_POST["password"],$usuario["password"])){
            if($_POST["recordarme"] != null){
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
