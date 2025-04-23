<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
    <link rel="shortcut icon" href="/img/favicon.ico">

    <!-- Para Apple -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-icon-180x180.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/apple-icon-72x72.png">

    <!-- Para Windows -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Manifest -->
    <link rel="manifest" href="/img/manifest.json">
    <!--<link href="img/apple-touch-icon.png" rel="apple-touch-icon">-->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="../../css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-DQvkBjpPgn7RC31MCQoOeC9TI2kdqa4+BSgNMNj8v77fdC77Kj5zpWFTJaaAoMbC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.4/dist/js/bootstrap.min.js" integrity="sha384-Re460s1NeyAhufAM5JwfIGWosokaQ7CH15ti6W5Y4wC/m4eJ5opJ2ivohxVM05Wd" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="container" >
        <header id="header" class="header_admin">
            <div class="container px-4 text-center">
                <div class="row gx-5">
                    <div class="col">
                        <img src="../../img/logo.png" class="rounded float-start" alt="...">

                    </div>
                    <div class="col">
                        <h2 class="loginadmin">Agregar Productos</h2>
                    </div>
                </div>
            </div>
        </header>
        <div class="margin_admin">

            <div class="container px-4 text-center">
                <div class="row gx-5">
                    <div class="col">
                        <h2 class="loginadmin">inventario</h2>
                        <table class="table table-bordered table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Cantidad</th>
                                    <th>Imágenes</th>
                                    <th>Tipo</th>
                                    <th>fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php include '../process/obtener_productos.php'; ?>
                            </tbody>
                        </table>

                    </div>
                    <div class="col">
                        <form method="POST" action="../process/procesar_producto.php" enctype="multipart/form-data">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Nombre</span>
                                <input type="text" name="nombre" class="form-control" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Descripcion</span>
                                <input type="text" name="descripcion" class="form-control" required>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Cantidad</span>
                                <input type="number" name="cantidad" class="form-control" required>
                            </div>
                            <div class="input-group mb-3">
                                <select class="form-select" name="type" aria-label="Default select example">
                                    <option selected>tipo de equipamiento</option>
                                    <option value="1">Tomografía Computada</option>
                                    <option value="2">Cámaras Gamma</option>
                                    <option value="3">Hemodinamia</option>
                                    <option value="4">Resonancia Magnética</option>
                                    <option value="5">Densitometría Ósea</option>
                                    <option value="6">Desfibriladores</option>
                                    <option value="7">Ecógrafos</option>
                                    <option value="8">Arcos en C</option>
                                    <option value="9">Electro Cardiógrafos</option>
                                </select>
                            </div>


                            <input type="file" name="imagen1" class="form-control">
    <input type="file" name="imagen2" class="form-control">
    <input type="file" name="imagen3" class="form-control">
                            <button type="submit" class="btn btn-outline-secondary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <script src="" async defer></script>
</body>

</html>