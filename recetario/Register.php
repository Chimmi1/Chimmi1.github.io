<?php
include("includes/bd.php");
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
    <!--- Este es el header-->
    
        <header>
            <nav class="navbarCSS navbar fixed-top navbar-expand-md navbar-dark ">
              <div class="container">
                <a href="index.html" class="navbar-brand mb-3">
                  <img class="d-inline-block align-top" src="recetario/img/indentificador.png" width="200" height="60" />
                </a>
        
                <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler"
                  aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav navbarItems">
                    <li class="nav-item active"><a class="nav-link active" href="index.html">Inicio</a></li>
                    <li class="nav-item active"><a class="nav-link active" href="topRecetas.html">Recetas</a></li>
                    <li class="nav-item active"><a class="nav-link active" href="">Tips</a></li>
                    <li class="nav-item dropdown"><a class="nav-link active dropdown-toggle" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false" href="#">Categorias</a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a href="topRecetas.html" class="dropdown-item">Sopas</a></li>
                        <li><a href="topRecetas.html" class="dropdown-item">Ensaladas</a></li>
                        <li><a href="topRecetas.html" class="dropdown-item">Miscelaneos</a></li>
        
                      </ul>
                    </li>
                  </ul>
                </div>
                <form action="" class="d-flex">
                  <input type="text" class="form-control me-2">
                  <button type="submit" class="btn btn-primary btnItem">Buscar</button>
                </form>
              </div>
            </nav>
          </header>
    <!--- FIN del header-->
    

    <section class="container text-center row align-items-center m-5">
        <div class="col d-none d-lg-block col-md-5 col-lg-5 col-xl-6">
          <img class="img-fluid" src="../recetario/img/comida.jpg" width="600" height="180" alt="ImgGrande">
        </div>
        <form class="col ">
          <img class="img-fluid" src="../recetario/img/indentificador.png" width="200" height="60" alt="">
          <h2>Crea una cuenta</h2>

          <div class="form-group mb-1">
            <label for="CorreoElectronico">Nombre</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Ingrese su nombre">
        </div>
        <div class="form-group mb-1">
            <label for="exampleInputPassword1">Apellido</label>
            <input type="password" class="form-control" id="exampleInputPassword1"
                placeholder="Ingrese su apellido">
        </div>

          <div class="form-group mb-1">
            <label for="CorreoElectronico">Correo Electronico</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
              placeholder="Ingrese su correo electrónico">
          </div>
          <div class="form-group mb-1">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingrese su contraseña">
          </div>

          <div class="form-group mb-1">
            <label for="exampleInputPassword1">Confirmar Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1"
                placeholder="Confirme su contraseña">
        </div>

          <div class="mb-3">
            <h6>Tienes una cuenta? <a href="Login.html" class="refItem">Logueate aqui</a> </h6>
            
          </div>
          <div class="d-grid">
            <button type="Login" class="btn btn-primary btnItem">Iniciar sesion</button>
          </div>
        </form>
    
      </section>



    <footer class=" footerCSS fixed-bottom text-white">
        <div class="container d-none d-md-block">
            <div class="wrapperCSS">
                <img class="mt-3" src="../recetario/img/indentificador.png" height="60" width="200" alt="">
                <p class="lead"></p>
                <a href="" class="position-absolute ">
                    <i class="bi bi-arrow-up-circle h1"></i>
                </a>
                <div>
                  <ul >
                    <p class="text-lg-center">Siguenos en: </p>
                    <img src="../recetario/img/fbIcon.png" height="40" width="40" alt="">
                    <img src="../recetario/img/igIcon.png" height="40" width="40" alt="">
                    <img src="../recetario/img/twIcon.png" height="40" width="40" alt="">
                  </ul>
                </div>
            </div>
        </div>
    
    </footer>

</body>

</html>