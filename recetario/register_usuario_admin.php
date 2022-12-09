<?php
include("includes/bd.php");
include("includes/header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

        <link rel="stylesheet" href="css/style.css">
</head>

<body>
  
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
    
    <section class=" text-center row cont-center bg-color">
        <div class="col col-5 d-lg-block col-md-5 col-lg-5 col-xl-6">
          <img class="img-fluid Inner-border" src="../recetario/img/comida.jpg" width="600" height="180" alt="ImgGrande">
        </div>
        <form action="registrar_usuario.php" class="col col-5" method="post">
          <img class="img-fluid" src="../recetario/img/indentificador.png" width="200" height="60" alt="">
          <h2>Crea una cuenta como administrador</h2>

          <div class="form-group mb-1">
            <label> Nombre de usuario</label>
            <input type="text" class="form-control" name="registroUsuario" required
                placeholder="Ingrese un nombre de usuario">
        </div>
        <div class="form-group mb-1">
            <label >Contraseña</label>
            <input type="password" class="form-control" name="registroContrasena" required
                placeholder="Ingrese una contraseña">
        </div>
        <div class="form-group col">
                    <label >Perfil</label>
                    <select name="registroPerfil" id="perfil" class="form-control" required aria-label="Seleccione un perfil">
                        <option selected value="usuario">Usuario</option>
                        <option value="administrador">Administrador</option>
                    </select>
                </div>
          <div class="d-grid">
            <input type="submit" value="Registrar usuario" class="btn btn-primary btnItem" name="registrar_usuario_admin"></input>
          </div>
        </form>

      </section>
</body>

</html>