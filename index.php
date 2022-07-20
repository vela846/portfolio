<?php
  $pa = "inicio"
?>



<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/stilos.css">
</head>

<body id="index" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main class="container inicio">
        <div class="row">
            <div class="col-12 mx-auto text-center cohete">
                <a href="proyectos.php"><img src="imagen/cohete.svg" alt=""></a>
            </div>
            <div class="col-12 col-sm-6 offset-sm-3 text-center">
                <div class="my-4">
                    <p class="my-4"><span class="px-5 py-2">Bienvenid@ a mi sitio web de desarrollo de sistemas.</span>
                    </p>
                </div>
            </div>
            <div class="col-12 text-center pt-3 pb-5">
                <a href="proyectos.php" class="btn shadow">Conoce mis proyecto</a>
            </div>
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