<?php

$pg = "sobre-mi";

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sobre Mi</title>
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css" />
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" />
  <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/estilos.css" />
</head>

<body id="sobre-mi">

  <?php include_once("header.php"); ?>

  <main>
    <div class="container">

      <div class="row">

        <div class="col-sm-5 col-12 mt-4">
          <h1 class="mt-sm-4 pb-sm-4">Sobre mí</h1>
          <p class="pb-sm-5">Apasionado por la tecnología y la programación.</p>
          <a href="contacto.html" class="btn btn-rojo">Enviar mensaje</a>
        </div>

        <div class="col-sm-3 col-12 mt-4 offset-sm-2">
          <img src="images/foto.jpg" alt="Matias Rossi" title="Matias Rossi" class="img-fluid image-circle">
        </div>

      </div>

    </div>

    <section id="tecnologias" class="mt-4 pb-5">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="my-sm-5 my-4">Stack tecnológico</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>Javascript</h3>
              <img src="images/javascript.jpeg" alt="javascript" class="img-fluid d-block mx-auto">
            </div>
          </div>

          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>PHP</h3>
              <img src="images/php.jpg" alt="php" class="img-fluid d-block mx-auto">
            </div>
          </div>

          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>HTML5</h3>
              <img src="images/html5.png" alt="html5" class="img-fluid d-block mx-auto">
            </div>
          </div>

          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>React.js</h3>
              <img src="images/react.png" alt="react" class="img-fluid d-block mx-auto">
            </div>
          </div>

          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>jQuery</h3>
              <img src="images/jquery.jpg" alt="jquery" class="img-fluid d-block mx-auto">
            </div>
          </div>

          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>Bootstrap</h3>
              <img src="images/bootstrap.png" alt="bootstrap" class="img-fluid d-block mx-auto">
            </div>
          </div>

        </div>

        <div class="row mt-sm-4 mt-0">

          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>Laravel</h3>
              <img src="images/laravel.png" alt="laravel" class="img-fluid d-block mx-auto">
            </div>
          </div>

          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>MySQL</h3>
              <img src="images/mysql.png" alt="mysql" class="img-fluid d-block mx-auto">
            </div>
          </div>

          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>CSS</h3>
              <img src="images/css.png" alt="css" class="img-fluid d-block mx-auto">
            </div>
          </div>

          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>Git</h3>
              <img src="images/git.png" alt="git" class="img-fluid d-block mx-auto">
            </div>
          </div>

          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>Apache</h3>
              <img src="images/apache.png" alt="apache" class="img-fluid d-block mx-auto" style="width: 100px;">
            </div>
          </div>

          <div class="col-sm-2 col-6 text-center">
            <div class="px-4 py-5 card mx-0 mb-4 mb-sm-0">
              <h3>Mercadopago</h3>
              <img src="images/mercado-pago.jpg" alt="mercado-pago" class="img-fluid d-block mx-auto">
            </div>
          </div>

        </div>


      </div>
    </section>

    <section id="experiencia-laboral" class="container">
      <div class="row">
        <div class="col-12 mt-5 pb-4">
          <h2 class="mt-3">
            <i class="fas fa-briefcase"></i>
            Experiencia laboral
          </h2>
        </div>
        <div class="row shadow bg-white rounded m-auto">
          <div class="col-12">
            <div class="row">
              <div class="col-3 p-5 my-auto">
                <a href="https://everfull.com.ar/" target="_blank"><img src="images/everfull.png" alt="everfull" title="Everfull" style="width: 150px;"></a>
              </div>
              <div class="col-12 col-sm-9 py-4">
                <h3>Adminitrador de Sistemas</h3>
                <h4>EVERFULL - GUPAZ S.A.</h4>
                <h5>2019 - Actualmente</h5>
                <p>Encargado del mantenimiento del servidor, las computadoras y el sistema de gestión de la empresa.
                  Realice programas para agilizar procesos en distintas áreas: <br>
                  <strong>Cobranzas:</strong> envíos de facturas por mail. <br>
                  <strong>Servicios técnicos:</strong> tomar servicios, generar ruta e impresión de hojas de trabajo. <br>
                  <strong>Deposito:</strong> control de ingresos, salidas y stock de mercaderia.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="formacion-academica" class="container">
      <div class="row pb-4">
        <div class="mt-5 pb-4">
          <h2 class="mt-3"><i class="fas fa-graduation-cap"></i>
            Formación académica
          </h2>
        </div>
        <div class="row shadow bg-white rounded m-auto">
          <div class="col-12 col-sm-6">
            <div class="row">
              <div class="col-3 m-auto">
                <img src="images/jefferson-college.png" alt="jefferson-college" class="img-fluid" title="Jefferson College">
              </div>
              <div class="col-9 pt-3">
                <h3>Bachiller en Economía</h3>
                <h4>Colegio Thomas Jefferson College</h4>
                <h5>2012 - 2018</h5>
                <p>http://jefferson-college.com.ar/sitio</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="otros" class="mt-5 p-1 p-sm-4">
      <div class="container">
        <div class="row py-4 mx-1">
          <div class="col-12 col-sm-5 card-idioma card shadow me-5">
            <div class="row">
              <div class="col-4 card-icono text-center">
                <i class="fas fa-comment-alt"></i>
              </div>
              <div class="col-8 lista-idiomas centrar">
                <div>
                  <h2>IDIOMAS</h2>
                  <ul>
                    <li>ESPAÑOL - Nativo</li>
                    <li>INGLÉS - Intermediate B2</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="col-12 col-sm-5 mt-3 mt-sm-0 card-hobbie card shadow">
            <div class="row">
              <div class="col-4 card-icono text-center">
                <i class="fas fa-star"></i>
              </div>
              <div class="col-8 lista-idiomas centrar">
                <div>
                  <h2>HOBBIES</h2>
                  <ul>
                    <li>Fútbol</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

  </main>

  <?php include_once("footer.php"); ?>

</body>

</html>