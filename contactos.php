<?php
$pg = "contactos"
?>



<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/stilos.css">
</head>

<body id="contacto" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-4">
                <h1>Contacto</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-6">
                <p>Te invito a que te contactes enviandome un mensaje o bien por whatsapp</p>
            </div>
            <div class="col12 col-sm-6">
                <form action="" method="POST">
                    <div class="pb-3">
                        <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control">
                    </div>
                    <div class="pb-3">
                        <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control">
                    </div>
                    <div class="pb-3">
                        <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Telefono/Whatsapp" class="form-control">
                    </div>
                    <div class="pb-3">
                        <textarea name="txtMensaje" id="txtMensaje" class="form-control" placeholder="Escriba aqui su mensaje"></textarea>
                    </div>
                    <div>
                        <button type="submit" id="btnEnviar" name="btnEnviar" class="btn">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer class="container mt-auto pb-4">
        <div class="row">
            <div class="col-3">
                <a href="https://api.whatsapp.com/send?phone=541141655296" class="btn-whatsapp" target="_blank" title="Whatsapp">
                    <i class="icon-whatsapp"></i>
                    <img class="btn-whatsapp" src="imagen/whatsapp.png" alt="Whatsapp">
                </a>
                <a href="#" target="_blank" title="Githud"><i class="fab fa-github"></i></a>
                <a href="#" target="_blank" title="Linkedin"><i class="fab fa-linkedin"></i></a>
            </div>
            <div class="col-3">
                Sponsor <a href="http://depcsuite.com" target="_blank">DePC Suite</a>
            </div>
            <div class="col-3">
                <a href="mailto:barujhashem11@gmail.com" target="_blank">barujhashem11@gmail.com</a>
            </div>
        </div>
    </footer>
</body>

</html>