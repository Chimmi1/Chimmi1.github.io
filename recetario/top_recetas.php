<?php
include("includes/bd.php");
include_once("session.php");
include("includes/header.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>top 10 Recetas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section>
        <div>
            <h2>Recetas más votadas</h2>
        </div>

    </section>

    <section>
        <table>
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <div class="container">

                    <div class="container topRecetasTitle">
                        <h1>Las top 10 recetas que han elegido nuestros fans</h1>
                    </div>
                    <div class="topRecetash2">
                        <h2>La receta estrella del momento:</h2>
                    </div>
                    <div class="container divisionCSS text-light">
                        <h6>.</h6>
                    </div>
                    <tr>
                        <div class="col-md-4 col-sm-5 mb-4 topRecetasContent">
                            <a href="" class="aDecoration">
                                <div class="card card-bg">
                                    <img class="img-fluid imagen-fondo-card" alt="100%x280" src="../recetario/img/receta3.jpg">
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Comida sobre comida</h4>
                                        <p class="card-text text-center">orem laoreet diam, et lacinia ipsum eros nec
                                            velit. Sed
                                            fringilla leo lacinia leo
                                            convallis</p>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </tr>
                    <div class="container divisionCSS text-light">
                        <h6>.</h6>
                    </div>
                    <div class="container topRecetash2">
                        <h2>El resto de las recetas favoritas:</h2>
                    </div>

                    <div class="col-md-4 col-sm-5 mb-4 topRecetasContent">
                        <a href="" class="aDecoration">
                            <div class="card card-bg">
                                <img class="img-fluid imagen-fondo-card" alt="100%x280" src="../recetario/img/receta4.jpg">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Comida sobre comida</h4>
                                    <p class="card-text text-center">orem laoreet diam, et lacinia ipsum eros nec velit.
                                        Sed
                                        fringilla leo lacinia leo
                                        convallis</p>

                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 col-sm-5 mb-4 topRecetasContent">
                        <a href="" class="aDecoration">
                            <div class="card card-bg">
                                <img class="img-fluid imagen-fondo-card" alt="100%x280" src="../recetario/img/receta2.jpg">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Comida sobre comida</h4>
                                    <p class="card-text text-center">orem laoreet diam, et lacinia ipsum eros nec velit.
                                        Sed
                                        fringilla leo lacinia leo
                                        convallis</p>

                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="col-md-4 col-sm-5 mb-4 topRecetasContent">
                        <a href="" class="aDecoration">
                            <div class="card card-bg">
                                <img class="img-fluid imagen-fondo-card" alt="100%x280" src="../recetario/img/receta1.jpg">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Comida sobre comida</h4>
                                    <p class="card-text text-center">orem laoreet diam, et lacinia ipsum eros nec velit.
                                        Sed
                                        fringilla leo lacinia leo
                                        convallis</p>

                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-md-4 col-sm-5 mb-4 topRecetasContent">
                        <a href="" class="aDecoration">
                            <div class="card card-bg">
                                <img class="img-fluid imagen-fondo-card" alt="100%x280" src="../recetario/img/receta5.jpg">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Comida sobre comida</h4>
                                    <p class="card-text text-center">orem laoreet diam, et lacinia ipsum eros nec velit.
                                        Sed
                                        fringilla leo lacinia leo
                                        convallis</p>

                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-md-4 col-sm-5 mb-4 topRecetasContent">
                        <a href="" class="aDecoration">
                            <div class="card card-bg">
                                <img class="img-fluid imagen-fondo-card" alt="100%x280" src="../recetario/img/receta6.jpg">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Comida sobre comida</h4>
                                    <p class="card-text text-center">orem laoreet diam, et lacinia ipsum eros nec velit.
                                        Sed
                                        fringilla leo lacinia leo
                                        convallis</p>

                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-md-4 col-sm-5 mb-4 topRecetasContent">
                        <a href="" class="aDecoration">
                            <div class="card card-bg">
                                <img class="img-fluid imagen-fondo-card" alt="100%x280" src="../recetario/img/receta4.jpg">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Comida sobre comida</h4>
                                    <p class="card-text text-center">orem laoreet diam, et lacinia ipsum eros nec velit.
                                        Sed
                                        fringilla leo lacinia leo
                                        convallis</p>

                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-md-4 col-sm-5 mb-4 topRecetasContent">
                        <a href="" class="aDecoration">
                            <div class="card card-bg">
                                <img class="img-fluid imagen-fondo-card" alt="100%x280" src="../recetario/img/receta3.jpg">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Comida sobre comida</h4>
                                    <p class="card-text text-center">orem laoreet diam, et lacinia ipsum eros nec velit.
                                        Sed
                                        fringilla leo lacinia leo
                                        convallis</p>

                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="col-md-4 col-sm-5 mb-4 topRecetasContent">
                        <a href="" class="aDecoration">
                            <div class="card card-bg">
                                <img class="img-fluid imagen-fondo-card" alt="100%x280" src="../recetario/img/receta2.jpg">
                                <div class="card-body">
                                    <h4 class="card-title text-center">Comida sobre comida</h4>
                                    <p class="card-text text-center">orem laoreet diam, et lacinia ipsum eros nec velit.
                                        Sed
                                        fringilla leo lacinia leo
                                        convallis</p>

                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </tbody>
        </table>
    </section>


    <?php
    include("includes/footer.php");
    ?>

</body>

</html>