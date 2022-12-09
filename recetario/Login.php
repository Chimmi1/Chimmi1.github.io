<?php
include("includes/bd.php");
include "mcript.php";
session_start();

if (isset($_POST['iniciar_sesion'])) {

  $usuario = $_POST['usuario'];
  $contra = $_POST['contra'];

  $user = $database->select("usuario_tb", "*", ["nombre_usuario" => $usuario]);
  
  if (count($user) > 0) {

    if ($desencriptar($user[0]['contra'])===$contra) {
      $_SESSION['login_user'] = $usuario;
      header("location: index.php");
    } else {
      $error = "contraseña invalida";
      echo "no funciona1";
    }
  } else {
    echo "no funciona";
    $error = "Usuario invalido";
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/style.css">
</head>

<body >
  <!--- Este es el header-->
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
  <!--- FIN del header-->

  <section class="container text-center row p-5 align-items-center m-5">
    <div class="col d-none d-lg-block col-md-5 col-lg-5 col-xl-6">
      <img class="img-fluid" src="../recetario/img/comida.jpg" width="600" height="180" alt="ImgGrande">
    </div>
    <form action="" class="col " method="post">
      <img src="../recetario/img/indentificador.png" width="200" height="60" alt="">
      <h2>Iniciar Sesion</h2>
      <div class="form-group mb-3">
        <label >Nombre de Usuario</label>
        <input type="text" name="usuario" class="form-control" aria-describedby="emailHelp"
          placeholder="Ingrese su nombre de usuario">
      </div>
      <div class="form-group mb-3">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" name="contra" class="form-control" placeholder="Ingrese su contraseña">
      </div>
      <div class="mb-3">
        <h6>Olvidaste tu contraseña? <a href="recuperar_contrasena.php" class="refItem">Logueate aqui</a> </h6>
        <h6>No tienes una cuenta? <a href="Register.php" class="refItem">Registrate aqui</a> </h6>
        <h6>Inicia sesion como administrador <a href="login_admin.php" class="refItem">administrador aqui</a> </h6>
      </div>
      <div class="d-grid">
        <input type="submit" value="Iniciar Sesion" class="btn btn-primary btnItem" name="iniciar_sesion">
      </div>
    </form>

  </section>

  <?php
    include("includes/footer.php");
    ?>


</body>

</html>