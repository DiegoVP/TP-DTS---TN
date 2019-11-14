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

    <link rel="stylesheet" href="css/index.css">

    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Gayathri|Lora|Montserrat|Playfair+Display&display=swap" rel="stylesheet">    <!-- ******* GOOGLE FONTS ***** -->


  </head>
  <body>
    <?php include("header.php") ?>

    <div class="container-fluid">
      <section class="row destacados">
        <div class="col-12 col-md-10 offset-md-1 destacados">
          <div class="row">
            <h2 class="home col-12 text-center destacados">destacados</h2>
            <article class="d-none d-md-inline-block col-md-4 destacados">
              <a href="#">
              <div class="row">
                <div class="articulo-fondo border">
                  <div class="col-6 col-md-12 imagen">
                    <img class="destacados" src="img/img-auxiliar1.webp" alt="img-reloj">
                  </div>
                  <div class="col-6 col-md-12">
                    <h4 class="home col-12 text-center">TISSOT</h4>
                  </div>
                </div>
              </div>
              </a>
            </article>
            <article class="d-none d-md-inline-block col-md-4 destacados">
              <a href="#">
              <div class="row">
                <div class="articulo-fondo border">
                  <div class="col-6 col-md-12 imagen">
                    <img class="destacados" src="img/img-auxiliar.webp" alt="img-reloj">
                  </div>
                  <div class="col-6 col-md-12">
                    <h4 class="home col-12 text-center">TOMMY</h4>
                  </div>
                </div>
              </div>
              </a>
            </article>
            <article class="d-none d-md-inline-block col-md-4 destacados">
              <a href="#">
              <div class="row">
                <div class="articulo-fondo border">
                  <div class="col-6 col-md-12 imagen">
                    <img class="destacados" src="img/img-auxiliar2.webp" alt="img-reloj">
                  </div>
                  <div class="col-6 col-md-12">
                    <h4 class="home col-12 text-center">BOSS</h4>
                  </div>
                </div>
              </div>
              </a>
            </article>
            <div class="col-12 d-flex justify-content-around destacados-celu d-md-none">
              <a href="#"><div class="p-2 destacados"><p class="destacados-celu">TISSOT</p></div></a>
              <a href="#"><div class="p-2 destacados"><p class="destacados-celu">TOMMY</p></div></a>
              <a href="#"><div class="p-2 destacados"><p class="destacados-celu">BOSS</p></div></a>
            </div>
          </div>
        </div>
      </section>
      <section class="row hombre-mujer">
        <a class="col-6" href="#">
          <div class="row">
            <img class="col-12"src="img/hombre.jpg" alt="seccion de hombres">
          </div>
        </a>
        <a class="col-6" href="#">
          <div class="row">
            <img class="col-12"src="img/mujer.jpg" alt="seccion de mujeres">
          </div>
        </a>
      </section>
      <section class="row promociones">
        <div class="col-12 col-md-10 offset-md-1 promociones">
          <div class="row">
            <h2 class="home col-12 text-center promociones"> promociones</h2>
            <div class="col-12 carrusel">
              <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="img/r1.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Badber</h5>
                        <p>Collección demujeres</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="img/r2.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Badber</h5>
                        <p>Collección de hombres</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="img/r3.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Omega</h5>
                        <p>Collección verano 2018</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img src="img/r4.jpg" class="d-block w-100" alt="...">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>Longines</h5>
                        <p>Solo para ellas</p>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <?php include("footer.php") ?>
  </body>
</html>
