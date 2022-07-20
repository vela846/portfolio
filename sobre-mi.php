<?php
  $pa = "sobre-mi"
?>



<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Sobre mi</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/stilos.css">
</head>

<body id="sobre-mi">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main class="container">
        <section class="container" id="descripcion">
            <div class="row mb-5">
                <div class="col-12 col-sm-7">
                    <h1 class="pb-5 pt-3">Sobre mí</h1>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et officia, accusamus ullam beatae amet
                        recusandae dicta aliquam corporis voluptate, aliquid ratione magni explicabo voluptates maxime
                        dolores autem. Fugit, laborum eaque!
                        datos.</p>
                    <div class="my-5">
                        <a href="contactos.php" class="btn-rojo">Enviar mensaje</a>
                    </div>
                </div>
                <div class="col-12 col-sm-5 mx-auto text-center">
                    <img src="imagen/yo.jpeg" alt="Octavio velasquez" class="imagen-perfil">
                </div>
            </div>
        </section>
        <section class="stack-tecnologico">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-12 py-5">
                        <h2>
                            Stack tecnologico
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>HTML5</h3>
                            <img src="imagen/html-5.png" alt="HTML">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>CSS</h3>
                            <img src="imagen/css-3.png" alt="CSS">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>PHP</h3>
                            <img src="imagen/php.png" alt="PHP">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>PYTHON</h3>
                            <img src="imagen/piton.png" alt="PYTHON">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>Bootstrap</h3>
                            <img src="imagen/bootstrap.png" alt="Bootstrap">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>JQUERY</h3>
                            <img src="imagen/jquery-sketch-symbol.png" alt="JQUERY">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>JAVASCRIPT</h3>
                            <img src="imagen/java-script.png" alt="JAVASCRIPT">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>MERCADO PAGO</h3>
                            <img src="imagen/mercado_pago.webp" alt="MERCADO PAGO">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>REACT.JS</h3>
                            <img src="imagen/atom.png" alt="REACT.JS">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>GIT</h3>
                            <img src="imagen/git.png" alt="GIT">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>MYSQL</h3>
                            <img src="imagen/MySQL.png" alt="MYSQL">
                        </div>
                    </div>
                    <div class="col-6 col-sm-2">
                        <div class="tecnologia mb-4 pt-5">
                            <h3>APACHE</h3>
                            <img src="imagen/Apache_HTTP_server_logo_(2019-present).svg.png" alt="APACHE">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="experiencia">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-5">
                        <h2>
                            <i class="fa-solid fa-briefcase"></i> Experiencia laboral
                        </h2>
                    </div>
                </div>
                <div class="row shadow">
                    <div class="col-2 d-none d-sm-block p-5">
                        <img src="imagen/sin-logo.png" alt="DePC" class="img-fluid gris">
                    </div>

                    <div class="col-2 d-none d-sm-block p-5">
                        <img src="imagen/depc.jpg" alt="Depcsuite" class="img-fluid gris">
                    </div>
                    <div class="col-sm-10 mt-4">
                        <h3>Desarrollador Web Full Stack</h3>
                        <h4>Depc Suite</h4>
                        <h5>mayo 2022 - Actualmente</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque recusandae reprehenderit,
                            voluptatibus, consequuntur ipsam quas cum saepe eius iusto quisquam esse nobis facere quod
                            nihil quia unde error vero obcaecati?</p>
                    </div>
    </main>
    <footer class="container mt-auto pb-4">
        <div class="row">
            <div class="col-3 ">
                <a href="https://api.whatsapp.com/send?phone=541141655296" class="btn-whatsapp" target="_blank" title="Whatsapp">
                    <i class="icon-whatsapp"></i>
                    <img class="btn-whatsapp" src="imagen/whatsapp.png" alt="Whatsapp">
                </a>
                <a href="#" target="_blank" title="Githud"><i class="fab fa-github"></i></a>
                <a href="#" target="_blank" title="Linkedin"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </footer>
</body>

</html>