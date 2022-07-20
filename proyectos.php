<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/stilos.css">
</head>

<body id="proyectos" class="d-flex flex-column h-100">
    <header class="container">
        <?php include_once("menu.php"); ?>
    </header>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3 pb-5">
                <h1>Proyectos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Los siguientes son algunos de los trabajos que e realizado:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-4 p-4">
                <div class="row border proyecto pb-5">
                    <div class="col-12 p-0">
                        <img src="imagen/abmclientes.png" alt="ABM CLIENTE" class="img-fluid">
                        <h2>ABM CLIENTES</h2>
                        <p class="py-2 px-3">Alta, baja y modificacion de un registro de clientes. Realizado en HTML,
                            CSS, PHP,Bootrasp y
                            Json</p>
                    </div>
                    <div class="col-6">
                        <a href="#" class="btn-rojo">Ver online</a>
                    </div>
                    <div class="col-6 tex-center">
                        <a href="#" class="link-rojo">Ver codigo fuente</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 p-4">
                <div class="row border proyecto pb-5">
                    <div class="col-12 p-0">
                        <img src="imagen/abmventas.png" alt="VENTAS" class="img-fluid">
                        <h2>SISTEMA DE GESTION DE VENTAS</h2>
                        <P class="py-2 px-3">Sistema de gestión de clientes, productos y ventas. Realizado en HTML, CSS,
                            PHP, MVC,
                            Bootstrap, Js, Ajax, jQuery y
                            MySQL de base de datos</P>
                    </div>
                    <div class="col-6">
                        <a href="#" class="btn-rojo">Ver online</a>
                    </div>
                    <div class="col-6 tex-center">
                        <a href="#" class="link-rojo">Ver codigo fuente</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 p-4">
                <div class="row border proyecto pb-5">
                    <div class="col-12 p-0">
                        <img src="imagen/proyecto-integrador.png" alt="INTEGRACION" class="img-fluid">
                        <h2>PROYECTO INTEGRACION</h2>
                        <P class="py-2 px-3">Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, jQuery, AJAX,
                            HTML, CSS,
                            Mercadopago con panel
                            administrador, gestor de usuarios, módulo de permisos y funcionalidades a fines</P>
                    </div>
                    <div class="col-6">
                        <a href="#" class="btn-rojo">Ver online</a>
                    </div>
                    <div class="col-6 tex-center">
                        <a href="#" class="link-rojo">Ver codigo fuente</a>
                    </div>
                </div>
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