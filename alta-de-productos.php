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
    --<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <link rel="stylesheet" href="css/alta-de-productos.css">

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Gayathri|Lora|Montserrat|Playfair+Display&display=swap" rel="stylesheet">    <!-- ******* GOOGLE FONTS ***** -->


  </head>
  <body>
    <?php include("header.php") ?>
    <div class="container-fluid">
      <h2 class="home col-12 text-center ">Carga de productos</h2>
      <form class="" action="alta-de.-productos.php" method="post">
        <div class="col-12 col-md-6">
          <div class="row">
            <div class="col-10 offset-1 a">
              <label class="col-12" for="img.prod">Seleccione la imagen del reloj</label>
              <input type="file" name="img.prod" placeholder="Ingrese su avatar" value="">
              <label class="col-12" for="img.prod">Seleccione la marca del reloj</label>
              <select class="col-6" name="marca">
                <option value="">Marca</option>
                <option value="Tommy Hilfiger">Tommy Hilfiger</option>
                <option value="Hugo Boss">Hugo Boss</option>
                <option value="Tissot">Tissot</option>
              </select>
              <label class="col-12" for="Modelo">Modelo:</label>
              <input class="col-12" type="text" name="Modelo" value="" placeholder="Modelo del reloj" >
              <label class="col-12" for="Precio">Precio:</label>
              <span class="col-1">$</span>
              <input class="col-8" type="number" min="0" step="any"  name="Precio" value="0">
              <label class="col-12"  for="genero">Seleccione el genero del reloj.</label>
              <select class="col-6" name="genero">
                <option value="">Genero</option>
                <option value="Hombre">Hombre</option>
                <option value="Mujer">Mujer</option>
              </select>
              <label class="col-12" onloadeddata="" for="garantia">Años de garantia</label>
              <select class="" name="garantia">
                <?php $z=0; while($z<=5){ ?>
                <option value=""><?php echo $z;?></option>
                <?php $z=$z+1;}  ?>
              </select>
              <label class="col-12" for="Descuento">Descuento</label>
              <select class="" name="garantia">
                <?php $x=0; while($x<=100){ ?>
                <option value=""><?php echo $x;?></option>
                <?php $x=$x+5;}  ?>
              </select>
            </div>

          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="row">
            <div class="col-10 offset-1 b">
              <label class="col-12" for="Material-caja">Seleccione el material de la caja</label>
              <select class="col-6" name="Material-caja">
                <option value="">Caja</option>
                <option value="inox">Acero inoxidable</option>
                <option value="Plastico">Plastico</option>
                <option value="Acrilico">Acrilico</option>
                <option value="Titanio">Titanio</option>
              </select>
              <label class="col-12" for="Material-correa">Seleccione el material de la correa</label>
              <select class="col-6" name="Material-correa">
                <option value="">Correa</option>
                <option value="inox">Acero inoxidable</option>
                <option value="cau">Caucho</option>
                <option value="c-m">Cuero marron</option>
                <option value="c-n">Cuero negro</option>
                <option value="c-m">Cuero Blanco</option>
              </select>
              <label class="col-12" for="Atm">Seleccione las atmosferas</label>
              <select class="col-6" name="Atm">
                  <?php $jj=0; while($jj<=10){ ?>
                  <option value=""><?php echo $jj;?></option>
                  <?php $jj=$jj+1;}  ?>
              </select>
              <section name="funciones">
                <div class="col-12"><label for="">Seleciones las funciones del reloj</label></div>
                <div id="check">
                  <label for="hora">Hora</label>
                  <input type="checkbox" name="hora"checked>
                </div>
                <div id="check">
                  <label for="minutos">Minutos</label>
                  <input type="checkbox" name="minutos"checked>
                </div>
                <div id="check">
                  <label for="minutos">Segundos</label>
                  <input type="checkbox" name="minutos">
                </div>
                <div id="check">
                  <label for="luz">Luz nocturna</label>
                  <input type="checkbox" name="luz">
                </div>
                <div id="check">
                  <label for="taquimetro">Taquímetro</label>
                  <input type="checkbox" name="taquimetro">
                </div>
                <div id="check">
                  <label for="cronometro">Cronometro</label>
                  <input type="checkbox" name="cronometro">
                </div>
              </section>
              <label class="col-12" for="color">Seleccione el color predominante</label>
              <select class="col-6" name="Material-correa">
                <option value=""></option>
                <option value="">negro</option>
                <option value="">rojo</option>
                <option value="">naranja</option>
                <option value="">rosa</option>
                <option value="">amarillo</option>
                <option value="">azul</option>
                <option value="">violeta</option>
                <option value="">plateado</option>
                <option value="">rose</option>
                <option value="">dorado</option>
                <option value="">verde</option>
              </select>
              <label class="col-12" for="descripcion">Incluya una descripción del producto</label>
              <textarea name="descripcion" rows="8" cols="80" name="desc" placeholder="Incluye una desripcion del reloj"></textarea>

            </div>

          </div>
        </div>
        <input class="btn btn-primary col-4 offset-4" type="submit" value="Cargar producto" name="submit" style="margin-bottom:50px">
      </form>
    </div>
    <?php include("footer.php") ?>
  </body>
</html>
