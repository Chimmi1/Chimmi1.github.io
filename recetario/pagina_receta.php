<?php
include("includes/bd.php");
include("includes/header.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $result = $database->select("receta_tb", "*", ["id" => $id]);

    if (count($result) == 1) {
        $titulo = $result[0]['titulo'];
        $img =  $result[0]['img'];
        $tiempo_preparacion =  $result[0]['tiempo_preparacion'];
        $tiempo_coccion =  $result[0]['tiempo_coccion'];
        $tiempo_total =  $result[0]['tiempo_total'];
        $porciones =  $result[0]['porciones'];
        $complejidad =  $result[0]['complejidad'];
        $categoria =  $result[0]['categoria'];
        $ocasion =  $result[0]['ocasion'];
        $paso1 =  $result[0]['paso1'];
        $paso2 =  $result[0]['paso2'];
        $paso3 =  $result[0]['paso3'];
        $descripcion =  $result[0]['descripcion'];
        $ingrediente1 =  $result[0]['ingrediente1'];
        $ingrediente2 =  $result[0]['ingrediente2'];
        $ingrediente3 =  $result[0]['ingrediente3'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recetas guardadas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="cont-center text-center mt-5 pt-5">
        <div class="RecipeCard">
            <div class="row m-5">
                <div class="col-2">
                    <img class="" height="300" width="300" src=<?php echo "../recetario/img/".$img?> alt="">
                    
                </div>

                <div class="col-3 " >
                    <h4 class="mb-1">Titulo de la receta</h4>
                    <h4 class="mb-2">Descripcion</h4>
                    <h4 class="mb-1">Porciones</h4>

                </div>
                <div class="col-7">
                    <h4 class="bg-light Inner-border"><?php echo $titulo ?></h4>
                    <p class="bg-light Inner-border"><?php echo $descripcion ?></p>
                    <h5 class="bg-light Inner-border"><?php echo $porciones ?></h5>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <h5>Tiempo de preparacion</h5>
                </div>
                <div class="col">
                    <h5>Tiempo de coccion</h5>
                </div>
                <div class="col">
                    <h5>Tiempo total</h5>
                </div>
            </div>

            <div class="row m-3">
                <div class="col">

                    <h5 class="bg-light Inner-border2"><?php echo $tiempo_preparacion ?></h5>
                </div>
                <div class="col">
                    
                    <h5 class="bg-light Inner-border2"><?php echo $tiempo_coccion ?></h5>
                </div>
                <div class="col">
            
                    <h5 class="bg-light Inner-border2"><?php echo $tiempo_total ?></h5>
                </div>
            </div>

            <div class="row m-3 ">
                <div class="col">
                    <h4>Lista de ingredientes</h4>
                    <ul class="list-group Inner-border2">
                        <li class="list-group-item "><?php echo $ingrediente1 ?></li>
                        <li class="list-group-item"><?php echo $ingrediente2 ?></li>
                        <li class="list-group-item"><?php echo $ingrediente3 ?></li>
                    </ul>
                </div>

                <div class="col">
                    <h4>Instrucciones</h4>
                    <ul class="list-group  Inner-border2">
                        <li class="list-group-item"><?php echo $paso1 ?></li>
                        <li class="list-group-item"><?php echo $paso2 ?></li>
                        <li class="list-group-item"><?php echo $paso3 ?></li>
                    </ul>
                </div>

            </div>

            <div class="row m-3 ">
            <div class="form-group col">
                <h5>Nivel de complejidad</h5>
                <h5 class="bg-light Inner-border2"><?php echo $complejidad ?></h5>
            </div>

            <div class="form-group col">
                <h5>Categoria de la receta</h5>
                <h5 class="bg-light Inner-border2"><?php echo $categoria ?></h5>
            </div>

            <div class="form-group col">
                <h5>Ocasion para la receta</h5>
                <h5 class="bg-light Inner-border2"><?php echo $ocasion ?></h5>
            </div>
           
        </div>

            <div class="form-group m-5">
                AGREGAR SLIDERS
            </div>

        </div>

    </section>


    <footer class=" fixed-bottom footerCSS text-white">
        <div class="container ">
            <div class="wrapperCSS">
                <img class="mt-3" src="img/indentificador.png" height="60" width="200" alt="">
                <p class="lead"> </p>
                <a href="" class="position-absolute bottom-0 end-0 ">
                    <i class="bi bi-arrow-up-circle h1"></i>
                </a>
                <div>
                    <p class="text-lg-center">Siguenos en: </p>
                    <img src="img/fbIcon.png" height="50" width="50" alt="">
                    <img src="img/igIcon.png" height="50" width="50" alt="">
                    <img src="img/twIcon.png" height="50" width="50" alt="">
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