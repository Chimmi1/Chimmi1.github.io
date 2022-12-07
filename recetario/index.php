<?php
include("includes/bd.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!--
        PROFE SI NO LE CARGAN LAS IMAGENES ES PORQUE TUVIMOS QUE CAMBIAR EL PATH LUEGO DE METER LA CARPETA DE GITHUB
        -->
    <header>
    <nav class="navbarCSS navbar fixed-top navbar-expand-md navbar-dark">
        <div class="container">
            <a href="index.php" class="navbar-brand mb-0">
                <img class="d-inline-block align-top" src="../recetario/img/indentificador.png" width="200" height="60" />
            </a>

            <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav navbarItems">
                    <li class="nav-item active"><a class="nav-link active" href="index.php">Inicio</a></li>
                    <li class="nav-item active"><a class="nav-link active" href="topRecetas.php">Recetas</a></li>
                    <li class="nav-item active"><a class="nav-link active" href="">Tips</a></li>
                    <li class="nav-item dropdown"><a class="nav-link active dropdown-toggle" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Categorias</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="topRecetas.html" class="dropdown-item">Sopas</a></li>
                            <li><a href="topRecetas.html" class="dropdown-item">Ensaladas</a></li>
                            <li><a href="topRecetas.html" class="dropdown-item">Miscelaneos</a></li>

                        </ul>
                    </li>
                </ul>
                <form action="" class="d-flex navbarSpace">
                    <input type="text" class="form-control me-2">
                    <button type="submit" class="btn btn-primary btnItem">Buscar</button>
                </form>
                <a href="Login.html">
                    <img src="../recetario/img/userIcon.png" height="50" width="50" class="navbarSpace" alt="">
                </a>
                <!--
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Dropdown button
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </div>
                          -->
            </div>
        </div>
    </nav>
</header>

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="" class="aDecoration">
                    <div class="imagen-fondo-carousel" style="background-image: url(../recetario/img/receta1.jpg) ;"></div>
                </a>
                <div class="carouselContainer text-light">
                    <h1>Explora nuestro repertorio culinario</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare, dolor et bibendum
                        viverra,
                        orci
                        lorem laoreet diam, et lacinia ipsum eros nec velit. Sed fringilla leo lacinia leo
                        convallis, in
                        pulvinar velit feugiat. Suspendisse vitae euismod leo. In accumsan ante metus. Aliquam
                        posuere,
                        libero a
                        congue semper, eros ante mollis eros, vitae convallis diam ex et turpis. Maecenas eget dolor
                        quam.
                        Mauris massa orci, aliquam vitae nibh ut, congue accumsan nisl. Nam vulputate laoreet ante
                        eget
                        rutrum.
                        Maecenas in libero at leo cursus sollicitudin ut non velit.</p>
                    <a href="" class="btn btn-lg btn-primary btnItem ">
                        Ver mas.
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <a href="" class="aDecoration">
                    <div class="imagen-fondo-carousel" style="background-image: url(../recetario/img/receta2.jpg) ;"></div>
                </a>
                <div class="carouselContainer text-light">
                    <h1>Mira las nuevas noticias sobre cocina</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare, dolor et bibendum
                        viverra,
                        orci
                        lorem laoreet diam, et lacinia ipsum eros nec velit. Sed fringilla leo lacinia leo
                        convallis, in
                        pulvinar velit feugiat. Suspendisse vitae euismod leo. In accumsan ante metus. Aliquam
                        posuere,
                        libero a
                        congue semper, eros ante mollis eros, vitae convallis diam ex et turpis. Maecenas eget dolor
                        quam.
                        Mauris massa orci, aliquam vitae nibh ut, congue accumsan nisl. Nam vulputate laoreet ante
                        eget
                        rutrum.
                        Maecenas in libero at leo cursus sollicitudin ut non velit.</p>
                    <a href="" class="btn btn-lg btn-primary btnItem">
                        Ver lo mismo.
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <a href="" class="aDecoration">
                    <div class="imagen-fondo-carousel" style="background-image: url(../recetario/img/receta3.jpg) ;"></div>
                </a>
                <div class="carouselContainer text-light">
                    <h1>Cuando sea grande quiero ser astronauta</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare, dolor et bibendum
                        viverra,
                        orci
                        lorem laoreet diam, et lacinia ipsum eros nec velit. Sed fringilla leo lacinia leo
                        convallis, in
                        pulvinar velit feugiat. Suspendisse vitae euismod leo. In accumsan ante metus. Aliquam
                        posuere,
                        libero a
                        congue semper, eros ante mollis eros, vitae convallis diam ex et turpis. Maecenas eget dolor
                        quam.
                        Mauris massa orci, aliquam vitae nibh ut, congue accumsan nisl. Nam vulputate laoreet ante
                        eget
                        rutrum.
                        Maecenas in libero at leo cursus sollicitudin ut non velit.</p>
                    <a href="" class="btn btn-lg btn-primary btnItem">
                        Ver menos.
                    </a>
                </div>
            </div>

        </div>

        <a href="#myCarousel" class="carousel-control-prev" role="button" data-bs-slide="prev">
            <span class="sr-only"></span>
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>

        <a href="#myCarousel" class="carousel-control-next" role="button" data-bs-slide="next">
            <span class="sr-only"></span>
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
    </div>

    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3">Recomendaciones del dia </h3>
                </div>
                <div class="col-6 text-right">
                    <a class="btn btn-primary mb-3 mr-1" href="#cardCarouselIndicators" role="button"
                        data-bs-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3 " href="#cardCarouselIndicators" role="button" data-bs-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">

                    <div id="cardCarouselIndicators" class="carousel slide" data-bs-ride="carousel">

                        <div class="carousel-inner">

                            <div class="carousel-item active card-carousel-item bg-light">

                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <a href="" class="aDecoration">
                                            <div class="card card-bg">
                                                <img class="img-fluid imagen-fondo-card" alt="100%x280"
                                                    src="../recetario/img/receta1.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Mucha comida</h4>
                                                    <p class="card-text">orem laoreet diam, et lacinia ipsum eros nec
                                                        velit.
                                                        Sed fringilla leo lacinia leo
                                                        convallis</p>

                                                </div>

                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <a href="" class="aDecoration">
                                            <div class="card card-bg">
                                                <img class="img-fluid imagen-fondo-card" alt="100%x280"
                                                    src="../recetario/img/receta2.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Mas comida</h4>
                                                    <p class="card-text">orem laoreet diam, et lacinia ipsum eros nec
                                                        velit.
                                                        Sed fringilla leo lacinia leo
                                                        convallis</p>

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <a href="" class="aDecoration">
                                            <div class="card card-bg">
                                                <img class="img-fluid imagen-fondo-card" alt="100%x280"
                                                    src="../recetario/img/receta3.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Comida sobre comida</h4>
                                                    <p class="card-text">orem laoreet diam, et lacinia ipsum eros nec
                                                        velit.
                                                        Sed fringilla leo lacinia leo
                                                        convallis</p>

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item card-carousel-item bg-light">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <a href="" class="aDecoration">
                                            <div class="card card-bg">
                                                <img class="img-fluid imagen-fondo-card" alt="100%x280"
                                                    src="../recetario/img/receta4.png">
                                                <div class="card-body">
                                                    <h4 class="card-title">Comase esta</h4>
                                                    <p class="card-text">orem laoreet diam, et lacinia ipsum eros nec
                                                        velit.
                                                        Sed fringilla leo lacinia leo
                                                        convallis</p>

                                                </div>

                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <a href="" class="aDecoration">
                                            <div class="card card-bg">
                                                <img class="img-fluid imagen-fondo-card" alt="100%x280"
                                                    src="../recetario/img/receta5.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">El de la derecha se la come</h4>
                                                    <p class="card-text">orem laoreet diam, et lacinia ipsum eros nec
                                                        velit.
                                                        Sed fringilla leo lacinia leo
                                                        convallis</p>

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <a href="" class="aDecoration">
                                            <div class="card card-bg">
                                                <img class="img-fluid imagen-fondo-card" alt="100%x280"
                                                    src="../recetario/img/receta6.png">
                                                <div class="card-body">
                                                    <h4 class="card-title">Me la comi</h4>
                                                    <p class="card-text">orem laoreet diam, et lacinia ipsum eros nec
                                                        velit.
                                                        Sed fringilla leo lacinia leo
                                                        convallis</p>

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3">Categorias </h3>
                </div>
                <div class="col-6 text-right">
                    <a class="btn btn-primary mb-3 mr-1" href="#cardCarouselIndicators2" role="button"
                        data-bs-slide="prev">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <a class="btn btn-primary mb-3 " href="#cardCarouselIndicators2" role="button" data-bs-slide="next">
                        <i class="fa fa-arrow-right"></i>
                    </a>
                </div>
                <div class="col-12">

                    <div id="cardCarouselIndicators2" class="carousel slide" data-bs-ride="carousel">

                        <div class="carousel-inner">

                            <div class="carousel-item active card-carousel-item bg-light">

                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <a href="" class="aDecoration">
                                            <div class="card card-bg">
                                                <img class="img-fluid imagen-fondo-card" alt="100%x280"
                                                    src="../recetario/img/receta1.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Mucha comida</h4>
                                                    <p class="card-text">orem laoreet diam, et lacinia ipsum eros nec
                                                        velit.
                                                        Sed fringilla leo lacinia leo
                                                        convallis</p>

                                                </div>

                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <a href="" class="aDecoration">
                                            <div class="card card-bg">
                                                <img class="img-fluid imagen-fondo-card" alt="100%x280"
                                                    src="../recetario/img/receta2.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Mas comida</h4>
                                                    <p class="card-text">orem laoreet diam, et lacinia ipsum eros nec
                                                        velit.
                                                        Sed fringilla leo lacinia leo
                                                        convallis</p>

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <a href="" class="aDecoration">
                                            <div class="card card-bg">
                                                <img class="img-fluid imagen-fondo-card" alt="100%x280"
                                                    src="../recetario/img/receta3.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">Comida sobre comida</h4>
                                                    <p class="card-text">orem laoreet diam, et lacinia ipsum eros nec
                                                        velit.
                                                        Sed fringilla leo lacinia leo
                                                        convallis</p>

                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item card-carousel-item bg-light">
                                <div class="row">

                                    <div class="col-md-4 mb-3">
                                        <a href="" class="aDecoration">
                                            <div class="card card-bg">
                                                <img class="img-fluid imagen-fondo-card" alt="100%x280"
                                                    src="../recetario/img/receta4.png">
                                                <div class="card-body">
                                                    <h4 class="card-title">Comase esta</h4>
                                                    <p class="card-text">orem laoreet diam, et lacinia ipsum eros nec
                                                        velit.
                                                        Sed fringilla leo lacinia leo
                                                        convallis</p>

                                                </div>

                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <a href="" class="aDecoration">
                                            <div class="card card-bg">
                                                <img class="img-fluid imagen-fondo-card" alt="100%x280"
                                                    src="../recetario/img/receta5.jpg">
                                                <div class="card-body">
                                                    <h4 class="card-title">El de la derecha se la come</h4>
                                                    <p class="card-text">orem laoreet diam, et lacinia ipsum eros nec
                                                        velit.
                                                        Sed fringilla leo lacinia leo
                                                        convallis</p>

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <a href="" class="aDecoration">
                                            <div class="card card-bg">
                                                <img class="img-fluid imagen-fondo-card" alt="100%x280"
                                                    src="../recetario/img/receta6.png">
                                                <div class="card-body">
                                                    <h4 class="card-title">Me la comi</h4>
                                                    <p class="card-text">orem laoreet diam, et lacinia ipsum eros nec
                                                        velit.
                                                        Sed fringilla leo lacinia leo
                                                        convallis</p>

                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h3 class="mb-3">Algunos tips </h3>
                </div>
                <div class="col-12">



                    <div class="carousel-item active card-carousel-item bg-light">

                        <div class="row">

                            <div class="col-md-4 mb-3">
                                <a href="" class="aDecoration">
                                    <div class="card card-bg">
                                        <img class="img-fluid imagen-fondo-card" alt="100%x280" src="../recetario/img/receta1.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Mucha comida</h4>
                                            <p class="card-text">orem laoreet diam, et lacinia ipsum eros nec velit. Sed
                                                fringilla leo lacinia leo
                                                convallis</p>

                                        </div>

                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4 mb-3">
                                <a href="" class="aDecoration">
                                    <div class="card card-bg">
                                        <img class="img-fluid imagen-fondo-card" alt="100%x280" src="../recetario/img/receta2.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Mas comida</h4>
                                            <p class="card-text">orem laoreet diam, et lacinia ipsum eros nec velit. Sed
                                                fringilla leo lacinia leo
                                                convallis</p>

                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-md-4 mb-3">
                                <a href="" class="aDecoration">
                                    <div class="card card-bg">
                                        <img class="img-fluid imagen-fondo-card" alt="100%x280" src="../recetario/img/receta3.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Comida sobre comida</h4>
                                            <p class="card-text">orem laoreet diam, et lacinia ipsum eros nec velit. Sed
                                                fringilla leo lacinia leo
                                                convallis</p>

                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="p-5 footerCSS text-white">
        <div class="container">
            <div class="wrapperCSS">
                <img src="../recetario/img/indentificador.png" height="60" width="200" alt="">
                <p class="lead">Copyright &copy 2022 Jose Daniel Rodriguez Castro </p>
                <a href="" class="position-absolute bottom-0 end-0 p-5">
                    <i class="bi bi-arrow-up-circle h1"></i>
                </a>
                <div>
                    <p class="text-lg-center">Siguenos en: </p>
                    <img src="../recetario/img/fbIcon.png" height="50" width="50" alt="">
                    <img src="../recetario/img/igIcon.png" height="50" width="50" alt="">
                    <img src="../recetario/img/twIcon.png" height="50" width="50" alt="">
                </div>
            </div>
        </div>

    </footer>











    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>