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
    <title>Recetas guardadas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="container bg-color Inner-border2 p-5 fixmid " >
        <div class="tableUser text-center "> 
          <h2 class="text-center text-light mb-3">Recetas guardadas</h2>  
        <table class="table table-responsive-md ">
            <thead>
              <tr>
                <th >#</th>
                <th >Platillo</th>
                <th >Titulo</th>
                <th>Descripcion</th>
              </tr>
            </thead>
            <tbody>
              <tr >
                <th >1</th>
                <td><img src="../recetario/img/receta1.jpg" height="100" alt=""></td>
                <td>Sopa</td>
                <td>Hecha de salsas</td>
              </tr>
              <tr>
                <th >2</th>
                <td><img src="../recetario/img/receta1.jpg" height="100" alt=""></td>
                <td>Sopa</td>
                <td>Hecha de salsas</td>
              </tr>
              <tr>
                <th >3</th>
                <td><img src="../recetario/img/receta1.jpg" height="100" alt=""></td>
                <td>Sopa</td>
                <td>Hecha de salsas</td>
              </tr>
            </tbody>
          </table>
        </div>
    </section>


    
    <?php
    include("includes/footer.php");
    ?>

</body>

</html>