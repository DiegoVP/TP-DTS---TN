<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>Relojes DTS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta name="viewport" content="width=device-width initial-scale=1">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/PPU.css">

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Gayathri|Lora|Montserrat|Playfair+Display&display=swap" rel="stylesheet">    <!-- ******* GOOGLE FONTS ***** -->


  </head>
  <body>
        <?php include("header.php") ?>
      <div class="">
        <h1>Bienvenido Usuario</h1>
      </div>
      <!-- List group -->
  <div class="list-group" id="myList" role="tablist">
    <a class="list-group-item list-group-item-action active" data-toggle="list" href="#home" role="tab">Datos Personales</a>
    <a class="list-group-item list-group-item-action" data-toggle="list" href="#profile" role="tab">Metodos de Pago</a>
    <a class="list-group-item list-group-item-action" data-toggle="list" href="#messages" role="tab">Modificar Preguntas Frecuentes</a>
    <a class="list-group-item list-group-item-action" data-toggle="list" href="#settings" role="tab">Eliminar cuenta</a>
  </div>

  <!-- Tab panes -->
  <div class="tab-content">
    <div class="tab-pane active" id="home" role="tabpanel"><ul class="list datos">
  <li class="list-group-item">Usuario</li>
  <li class="list-group-item">Nombres</li>
  <li class="list-group-item">Apellidos</li>
  <li class="list-group-item">Mail</li>
</ul></div>
    <div class="tab-pane" id="profile" role="tabpanel">...</div>
    <div class="tab-pane" id="messages" role="tabpanel">...</div>
    <div class="tab-pane" id="settings" role="tabpanel">...</div>
  </div>
  <?php include("footer.php") ?>
  </body>
