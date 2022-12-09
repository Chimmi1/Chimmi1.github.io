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
    <title>Usuarios registrados</title>
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
          <h2 class="text-center text-light mb-3">Usuarios registrados</h2>  
        <table class="table table-responsive-md ">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Usuario</th>
                            <th>Contraseña</th>
                            <th>Perfil</th>
                            <th></th>
                            <th>
                                <a href="frm_usuario.php" class="btn btn-outline-primary">
                                    <i class="far fa-save textbtn">Agregar</i>
                                </a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $result = $database->select("usuario_tb", "*");
                        for ($i = 0; $i < count($result); $i++) {   ?>
                            <tr>
                                <td><?php echo $result[$i]['id'] ?></td>
                                <td><?php echo $result[$i]['nombre_usuario'] ?></td>
                                <td><?php echo $result[$i]['contra'] ?></td>
                                <td><?php echo $result[$i]['perfil'] ?></td>
                                <td>
                                    <a href="editar_usuario.php?id=<?php echo $result[$i]['id']; ?>" class="btn btn-outline-info">
                                        <i class="far fa-edit textbtn">Editar</i>
                                    </a>
                                </td>
                                <td>
                                    <a href="eliminar_usuario.php?id=<?php echo $result[$i]['id']; ?>" class="btn btn-outline-danger">
                                        <i class="far fa-trash-alt textbtn">Eliminar</i>
                                    </a>
                                </td>
                            </tr>

                        <?php

                        }
                        ?>
                    </tbody>
                </table>
        </div>
    </section>


    
    <?php
    include("includes/footer.php");
    ?>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>

</html>