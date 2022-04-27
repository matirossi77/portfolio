<?php

$pg = "inicio";

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inicio</title>
  <link rel="stylesheet" href="css/fontawesome/css/all.min.css" />
  <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css" />
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" />
  <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="css/estilos.css" />
</head>

<body id="index">

  <?php include_once("header.php"); ?>

  <main>
    <div class="container">
      <div class="row">
        <div class="col-12 mt-4">
          <div class="imagen-cohete text-center">
            <img src="images/cohete.svg" alt="cohete">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center mt-3 pt-5">
          <p class="mensaje text-center">Bienvenid@ a mi sitio web.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center mt-4 pt-2">
          <a href="proyectos.html" class="btn btn-proyectos shadow">Conoce mis proyectos</a>
        </div>
      </div>
    </div>
  </main>
</body>

<?php include_once("footer.php"); ?>

</html>