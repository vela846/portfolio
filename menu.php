        <nav class="navbar navbar-expand-md mb-4">
            <div class="container-fluid">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" <?php echo ($pa == "inicio")? "active": ""; ?> href="index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" <?php echo ($pa == "sobre-mi")? "active": ""; ?> href="sobre-mi.php">Sobre mi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" <?php echo ($pa == "proyectos")? "active": ""; ?> href="proyectos.php">Proyecto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" <?php echo ($pa == "contactos")? "active": ""; ?> href="contactos.php">Contacto</a>

                        </li>
                    </ul>

                </div>
            </div>
        </nav>