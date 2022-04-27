<?php 

$pg = "contacto";

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" />
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos.css" />
  </head>

  <body id="contacto">

  <?php include_once("header.php"); ?>

    <main class="container">
      <div class="row">
        <div class="class=col-12 pb-3 pt-sm-4 pb-sm-4">
          <h1>Contacto</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6">
          <p>
            Te invito a que te contactes enviándome un mensaje o bien por
            whatsapp.
          </p>
        </div>
        <div class="col-12 col-sm-6">
          <form action="" method="POST">
            <div class="mb-3">
              <input
                type="text"
                name="txtNombre"
                id="txtNombre"
                placeholder="Nombre"
                required
                class="form-control shadow"
              />
            </div>
            <div class="mb-3">
              <input
                type="email"
                name="txtCorreo"
                id="txtCorreo"
                placeholder="Correo"
                required
                class="form-control shadow"
              />
            </div>
            <div class="mb-3">
              <input
                type="tel"
                name="txtTel"
                id="txtTel"
                placeholder="Teléfono/Whatsapp"
                required
                class="form-control shadow"
              />
            </div>
            <div class="mb-3">
              <textarea
                name="txtMensaje"
                id="txtMensaje"
                cols="30"
                rows="10"
                placeholder="Escribe aquí tu mensaje"
                required
                class="form-control shadow"
              ></textarea>
            </div>
            <div>
              <button
                type="submit"
                id="btnEnviar"
                name="btnEnviar"
                class="btn btn-blanco px-4"
              >
                ENVIAR
              </button>
            </div>
          </form>
        </div>
      </div>
    </main>

    <?php include_once("footer.php"); ?>

</html>
