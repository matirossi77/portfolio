<header>
      <nav class="navbar navbar-expand-md mb-4">
        <div class="container">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0 mt-2">
              <li class="nav-item <?php echo $pg == "inicio" ? "active" : "" ?>">
                <a class="nav-link px-4 py-1" href="index.php">Inicio</a>
              </li>
              <li class="nav-item <?php echo $pg == "sobre-mi" ? "active": "" ?>">
                <a class="nav-link px-4 py-1" href="sobre-mi.php">Sobre mí</a>
              </li>
              <li class="nav-item <?php echo $pg == "proyectos" ? "active": "" ?>">
                <a class="nav-link px-4 py-1" href="proyectos.php"
                  >Proyectos</a
                >
              </li>
              <li class="nav-item <?php echo $pg == "contacto" ? "active": "" ?>" aria-current="page">
                <a class="nav-link px-4 py-1" href="contacto.php">Contacto</a>
              </li>
            </ul>
            <div class="d-flex">
              <a href="" class="btn btn-outline-success btn-rojo" type="submit">
                Descargar mi CV
                <i class="fa-solid fa-download"></i>
              </a>
            </div>
          </div>
        </div>
      </nav>
    </header>