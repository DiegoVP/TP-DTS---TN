<!DOCTYPE html>
<?php
//errores para mostrar
$errorNombre = "";
$errorApellido ="";
$errorEmail = "";
$errorUser = "";
$errorAvatar = "";
$errorContrasenia = "";
$errores = false;

if(!isset($_SESSION))
{
    session_start();
}

if(isset($_SESSION["username"])){

  header("Location:index.php");
}


if(isset($_COOKIE["username"])){
    $_SESSION["username"] = $_COOKIE["username"];
    header("Location:index.php");
}



  if(isset($_POST["Registrarme"])){
    require_once 'clases/Validador.php';
    $validador = new Validador;

    $errorNombre = $validador->validarNombre($_POST["nombre"]);
    $errorApellido =  $validador->validarApellido($_POST["apellido"]);
    $errorEmail =  $validador->validarEmail($_POST["email"]);
    $errorUser =  $validador->validarUsername($_POST["username"]);
    $errorAvatar = $validador->validarAvatar($_FILES);
    $errorContrasenia = $validador->validarContrasenia($_POST["password"],$_POST["passwordConfirm"]);
    if($errorNombre=="OK"&&$errorContrasenia=="OK"&&$errorApellido=="OK"&&$errorEmail=="OK"&&$errorUser=="OK"&&$errorAvatar=="OK"){
      require_once 'clases/bbdd.php';
        $bbdd = new BBDD;

        // GUARDO IMAGEN EN SERVIDOR
        $ext = pathinfo($imagen['avatar']['name'],  PATHINFO_EXTENSION);
        $avatarAdress = 'fotos/' . $_POST['email'] . '.' . $ext;
        move_uploaded_file($_FILES['avatar']['tmp_name'], $avatarAdress);

        // REGISTRO USUARIO EN BASE DE DATOS
        $idUser = $bbdd->registroUsuario($_POST["nombre"],$_POST["apellido"],$_POST["email"],$_POST["username"],$avatarAdress,$_POST["password"]);

        //si se registro bien...
        if($id_user){
          //RECORDARME
            if(isset($_POST["recordarme"])){
              if($_POST["recordarme"] != null){
                $usernameaux=$_POST["username"];
                setcookie("username","$usernameaux", time() + 60 * 60* 24 );
              }
            }
            //LOGUEO AL USUARIO Y REDIRIJO AL HOME
            session_start();
          $_SESSION["username"] = $_POST["nombre"];
            header("Location:home.php");
        }

    }

    }

?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="with=device-with, initial-scale=1">
    <!-- ******* BOOTSTRAP-JAVA ***** -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- ******* BOOTSTRAP-JAVA ***** -->

    <!-- ******* J-QUERY ***** -->
     <script src="https://code.jquery.com/jquery-3.4.1.slim.js" integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="crossorigin="anonymous"></script>
    <!-- ******* J-QUERY ***** -->

    <!-- ******* STYLE.CSS ***** -->
    <link rel="stylesheet" href="css/style-body-register.css">
    <!-- ******* STYLE.CSS ***** -->

        <!-- ******* GOOGLE FONTS ***** -->
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Gayathri|Lora|Montserrat|Playfair+Display&display=swap" rel="stylesheet">    <!-- ******* GOOGLE FONTS ***** -->
        <!-- ******* GOOGLE FONTS ***** -->

        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

        <!--- Include the above in your HEAD tag ---------->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <title>Registro</title>
  </head>
  <body class="bregister">


    <?php include("header.php") ?>


    <div class="inforegiter container-fluid ">
      <h1 id= "tituloregister2">Crear una cuenta</h1>
      <p class="back-link">
        <a href="login.php">Volver</a>
      </p>
      <p class=lead>Porfavor ingresar todos los datos requeridos.</p>
    </div>
    <div class=" listregister row">
      <form class= "col-12 col-lg-6" action="register.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Nombres</label>
          <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombres" name="nombre" value="<?php if($errorNombre=="OK"){echo($_POST["nombre"]); } ?>" >
          <span class="invalido"><?php echo($errorNombre); ?></span>
        </div>

        <div class="form-group">
          <label for="formGroupExampleInput2" class="col-sm-2 col-form-lable">Apellidos</label>
          <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Apellidos" name="apellido" value="<?php if($errorApellido=="OK"){echo($_POST["apellido"]); } ?>">
          <span class="invalido"><?php echo($errorApellido); ?></span>
        </div>

        <div class="form-group">
          <label for="formGroupExampleInput3" class="col-sm-2 col-form-lable">Email</label>
          <input type="email" class="form-control" id="formGroupExampleInput3" placeholder="Email" name="email" value="<?php if($errorEmail=="OK"){echo($_POST["email"]); } ?>">
          <span class="invalido"><?php echo($errorEmail); ?></span>
        </div>

        <div class="form-group">
          <label for="formGroupExampleInput4" class="col-sm-2 col-form-lable">Nombre de Usuario</label>
          <input type="username" class="form-control" id="formGroupExampleInput4" placeholder="Nombre de Usuario" name="username"value="<?php if($errorUser=="OK"){echo($_POST["username"]); } ?>">
          <span class="invalido"><?php echo($errorUser); ?></span>
        </div>

        <input type="file" name="avatar" placeholder="Ingrese su avatar">
        <?php if(isset($_FILES['avatar'])){?>
        <span class="invalido"><?php echo("Por favor vuelva a seleccionar la imagen"); ?></span>
        <?php } ?>


        <div class="form-group">
          <label for="formGroupExampleInput5" class="col-sm-2 col-form-lable">Contraseña</label>
          <input type="password" class="form-control" id="formGroupExampleInput5" placeholder="Password" name="password" >
          <?php if($errorContrasenia!="OK"){?>
          <span class="invalido"><?php echo($errorContrasenia); ?></span>
          <?php } ?>
          <?php if(!isset($_POST['password'])){?>
          <p class="col-12 aviso">La contraseña debe tener una longitud mayor a 6 caracteres y menor a 16. Debe contener mayusculas,minusculas y al menos un número.</p>
          <?php } ?>
        </div>

        <div class="form-group">
          <label for="formGroupExampleInput6" class="col-4 col-form-lable">Confirmar Contraseña</label>
          <input type="password" class="form-control" id="formGroupExampleInput6" placeholder="Confirm Password" name="passwordConfirm">
          <?php if($errorContrasenia!="OK"){?>
          <span class="invalido"><?php echo($errorContrasenia); ?></span>
          <?php } ?>
        </div>

        <div class="form-group">
          <label for="formGroupExampleInput7" class="col-4 col-form-lable">Recordarme</label>
          <input type="checkbox" class="form-control" id="formGroupExampleInput7" value="recordar" name="recordarme" <?php if (isset($_POST["recordarme"])){
            echo"checked";
          }  ?> >
          <br>
        <input class="btn btn-primary" type="submit" value="Registrarme" name="Registrarme">

        </div>

      </form>

    </div>


  <?php include("footer.php") ?>



  </body>
</html>
