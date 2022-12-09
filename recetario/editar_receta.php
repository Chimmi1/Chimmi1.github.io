<?php

include("includes/bd.php");
include("session.php");
include("includes/header.php");
?>

<?php

if (isset($_GET['id']) && isset($_SESSION['login_user'])) {
    $id = $_GET['id'];

    $result = $database->select("usuario_tb", "*", ["id" => $id]);

    if (count($result) == 1) {
        $id= $result[0]['id'];
        $titulo = $result[0]['titulo'];
        $descripcion = $result[0]['descripcion'];
        $img= $result[0]['img'];
        $tiempo_preparacion= $result[0]['tiempo_preparacion'];
        $tiempo_coccion= $result[0]['tiempo_coccion'];
        $tiempo_total= $result[0]['tiempo_total'];
        $porciones= $result[0]['porciones'];
        $complejidad= $result[0]['complejidad'];
        $categoria= $result[0]['categoria'];
        $ocasion= $result[0]['ocasion'];
        $votos= $result[0]['votos'];
        $paso1= $result[0]['paso1'];
        $paso2= $result[0]['paso2'];
        $paso3= $result[0]['paso3'];
        $ingrediente1= $result[0]['ingrediente1'];
        $ingrediente2= $result[0]['ingrediente2'];
        $ingrediente3= $result[0]['ingrediente3'];
    }
}
?>
<?php

if (isset($_POST['actualizar'])) {
    $id = $_GET['id'];
    $titulo = $_POST[0]['titulo'];
        $descripcion = $_POST[0]['descripcion'];
        $img= $_POST[0]['img'];
        $tiempo_preparacion= $_POST[0]['tiempo_preparacion'];
        $tiempo_coccion= $_POST[0]['tiempo_coccion'];
        $tiempo_total= $_POST[0]['tiempo_total'];
        $porciones= $_POST[0]['porciones'];
        $complejidad= $_POST[0]['complejidad'];
        $categoria= $_POST[0]['categoria'];
        $ocasion= $_POST[0]['ocasion'];
        $votos= $_POST[0]['votos'];
        $paso1= $_POST[0]['paso1'];
        $paso2= $_POST[0]['paso2'];
        $paso3= $_POST[0]['paso3'];
        $ingrediente1= $_POST[0]['ingrediente1'];
        $ingrediente2= $_POST[0]['ingrediente2'];
        $ingrediente3= $_POST[0]['ingrediente3'];


    $result = $database->update("usuario_tb", [
        "id" => $id,
        "titulo" => $titulo,
        "descripcion" => $descripcion,
        "img" => $img,
        "tiempo_preparacion" => $tiempo_preparacion,
        "tiempo_coccion " => $tiempo_coccion,
        "tiempo_total" => $tiempo_total,
        "porciones" => $porciones,
        "complejidad" => $complejidad,
        "categoria" => $categoria,
        "ocasion" => $ocasion,
        "votos" => $votos,
        "paso1" => $paso1,
        "paso2" => $paso2,
        "paso3" => $paso3,
        "ingrediente1" => $ingrediente1,
        "ingrediente2" => $ingrediente2,
        "ingrediente3" => $ingrediente3
    ], [
        "id" => $id
    ]);

    if (!$result) {
        die("Query failed");
    }

    $_SESSION['mensaje'] = "Usuario actualizado";
    $_SESSION['mensaje_tipo'] = "warning";
    $_SESSION['login_user'] = $login_session;

    header("Location: usuarios_registrados.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    

<section class="container p-2 align-items-center">
    <section class="card bg-dark text-white" style="border-radius:1rem;">
        <div class="card-body p-5 text-center">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body">
                        <form action="editar_usuario.php?id=<?php echo $_GET['id'] ?>" method="post">
                            <div class="form-group">
                                <input type="text" name="id" disabled value="<?php echo $_GET['id'] ?>" class="form-control" placeholder="Id" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="usuario" value="<?php echo $usuario ?>" class="form-control" placeholder="Nombre de usaurio" required>
                            </div>
                            <div class="form-group">
                                <select name="perfil" value="<?php echo $perfil ?>" id="perfil" class="form-control" aria-label="Seleccione un perfil">
                                    <?php if ($perfil == "administrador") { ?>
                                        <option selected value="administrador">Administrador</option>
                                        <option value="usuario">usuario</option>
                                    <?php } else if ($perfil == "usuario") { ?>
                                        <option selected value="administrador">Administrador</option>
                                        <option value="usuario">administrador</option>
                                    <?php   } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="password" name="contra" value="<?php echo $contra ?>" class="form-control" placeholder="Contrasena" required>
                            </div>
                            <input type="submit" value="Modificar usuario" class="btn btn-success btn-block" name="actualizar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</section>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

</body>
</html>