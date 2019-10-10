<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
<form class= "col-12 col-lg-6">
  <div class="form-group">
    <label for="formGroupExampleInput" class="col-sm-2 col-form-label">Nombres</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombres">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2" class="col-sm-2 col-form-lable">Apellidos</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Apellidos">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput3" class="col-sm-2 col-form-lable">Email</label>
    <input type="email" class="form-control" id="formGroupExampleInput3" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput4" class="col-sm-2 col-form-lable">Contraseña</label>
    <input type="password" class="form-control" id="formGroupExampleInput4" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput5" class="col-4 col-form-lable">Confirmar Contraseña</label>
    <input type="password" class="form-control" id="formGroupExampleInput5" placeholder="Confirm Password">
    <br>
  <input class="btn btn-primary" type="submit" value="Submit">
  </div>
</form>

  </div>


  <?php include("footer.php") ?>



  </body>
</html>
