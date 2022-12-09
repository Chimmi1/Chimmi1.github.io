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
        $usuario = $result[0]['nombre_usuario'];
        $contra = $result[0]['contra'];
        $perfil = $result[0]['perfil'];
    }
}
?>
<?php

if (isset($_POST['actualizar'])) {
    $id = $_GET['id'];
    $usuario = $_POST['nombre_usuario'];
    $contra = $_POST['contra'];
    $perfil = $_POST['perfil'];

    $result = $database->update("usuario_tb", [
        "usuario" => $usuario,
        "perfil" => $perfil,
        "contra" => $contra
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

<main class="container p-2 align-items-center">
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
                                    <?php if ($perfil == "Administrador") { ?>
                                        <option selected value="Administrador">Administrador</option>
                                        <option value="Consulta">Consulta</option>
                                        <option value="Soporte">Soporte</option>
                                    <?php } else if ($perfil == "Consulta") { ?>
                                        <option selected value="Consulta">Consulta</option>
                                        <option value="Administrador">Administrador</option>
                                        <option value="Soporte">Soporte</option>
                                    <?php   } else { ?>
                                        <option value="Administrador">Administrador</option>
                                        <option value="Consulta">Consulta</option>
                                        <option selected value="Soporte">Soporte</option>
                                    <?php  } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="password" name="passw" value="<?php echo $passw ?>" class="form-control" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <input type="date" name="fecha" value="<?php echo $fecha ?>" class="form-control" placeholder="Fecha" required>
                            </div>
                            <input type="submit" value="Actualizar usuario" class="btn btn-success btn-block" name="actualizar">
                            <input type="button" class="btn btn-success btn-block" onclick="history.back()" name="Atras" value="Atrás">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>