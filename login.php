<!DOCTYPE html>
<?php
if(!isset($_SESSION))
{
    session_start();
}
if(isset($_COOKIE["username"])){
    $_SESSION["username"] = $_COOKIE["username"];
    header("Location:index.php");
}
if(isset($_SESSION["username"])){

  header("Location:index.php");
}
if($_POST){
    if($_POST["recordarme"] != null){
        setCookie("username",$_POST["username"]);
    }
    //valido los datos
    //guardo en el json
    $_SESSION["username"] = $_POST["username"];
    header("Location:index.php");
}
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- ******* BOOTSTRAP-online ***** -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- ******* BOOTSTRAP-online ***** -->
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
    <link rel="stylesheet" href="css/style-body-login.css">
    <!-- ******* STYLE.CSS ***** -->

        <!-- ******* GOOGLE FONTS ***** -->
        <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Gayathri|Lora|Montserrat|Playfair+Display&display=swap" rel="stylesheet">    <!-- ******* GOOGLE FONTS ***** -->
        <!-- ******* GOOGLE FONTS ***** -->

        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

        <!------ Include the above in your HEAD tag ---------->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <title>Login </title>
  </head>
  <body class="bLogin">


    <?php include("header.php") ?>


    <div id="titulologinpage" class="container-fluid ">
      <h1 id="titulologinpage" class="col-12">Iniciar seción o Registrarse</h1>
    </div>
      </div>
      <div class= "row" >
    <div class="col-md-12 col-lg-6" id=logininfo >
      <h4>Iniciar seción</h4>
      <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label-Recordarme" for="exampleCheck1">Recordarme</label>
  </div>
  <button type="submit" class="btn btn-primary">Iniciar seción</button>
    <p id="forgotpassword">
      <a href="">Olvido su contraseña?</a></p>
</form>
</div>
    <div class= "col-lg-5 col-md-12" id="inforegister">
<h4 id= "tituloregister"> Nuevos usuarios </h4>
<p id="inforegister">Al crear una cuenta con nuestra tienda podrás moverte más rápidamente por el proceso de pago, guardar múltiples direcciones de envío, ver y seguir el rastro de los pedidos de tu cuenta y más!! </p>
<br>
<br>
<a class="btn btn-primary" href="register.php" role="button">REGISTRARSE</a>
</div>


</div>

<?php include("footer.php") ?>


  </body>
</html>
