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
    <!--- Este es el header-->
    <header>
        <nav class="navbarCSS navbar fixed-top navbar-expand-md navbar-dark">
            <div class="container">
                <a href="index.html" class="navbar-brand mb-0">
                    <img class="d-inline-block align-top" src="img/indentificador.png" width="200" height="60" />
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
                        <img src="img/userIcon.png" height="50" width="50" class="navbarSpace" alt="">
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
    <!--- FIN del header-->

    <section class="container cont-center  text-center mt-5">
        <div class="RecipeCard ">
            <div class="row m-5">
                <div class="col-2">
                    <img class="" src="" alt="ImagenReceta">
                    
                </div>

                <div class="col-3 " >
                    <h4 class="mb-3">Titulo de la receta</h4>
                    <h4 class="mb-3">Descripcion</h4>
                    <h4 class="mb-3">Porciones</h4>

                </div>
                <div class="col-7">
                    <input type="text" name="cedula" class="form-control mb-2" placeholder="Titulo de la receta" autofocus required>
                    <input type="text" name="cedula" class="form-control mb-2" placeholder="Descripcion" >
                    <input type="text" name="cedula" class="form-control mb-2" placeholder="Porciones" >
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

                    <input type="text" name="cedula" class="form-control" placeholder="Tiempo de coccion">
                </div>
                <div class="col">
                    
                    <input type="text" name="cedula" class="form-control" placeholder="Cédula" >
                </div>
                <div class="col">
                    <input type="text" name="cedula" class="form-control" placeholder="Cédula" >
                </div>
            </div>

            <div class="row m-3 ">
                <div class="col">
                    <h4>Lista de ingredientes</h4>
                    <ul class="list-group  ">
                        <li class="list-group-item ">ingrediente1</li>
                        <li class="list-group-item">ingrediente1</li>
                        <li class="list-group-item">ingrediente1</li>
                    </ul>
                </div>

                <div class="col">
                    <h4>Instrucciones</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">instruccion1</li>
                        <li class="list-group-item">instruccion2</li>
                        <li class="list-group-item">instruccion4</li>
                    </ul>
                </div>

            </div>

            <div class="row m-3 ">
            <div class="form-group col">
                <h6>Nivel de complejidad</h6>
                <select name="perfil" id="perfil" class="form-control" aria-label="Seleccione un perfil">
                    <option selected>Nivel de complejidad</option>
                    <option value="Administrador">Fácil</option>
                    <option value="Consulta">Intermedio</option>
                    <option value="Soporte">Avanzado</option>
                </select>
            </div>

            <div class="form-group col">
                <h6>Categoria de la receta</h6>
                <select name="perfil" id="perfil" class="form-control" aria-label="Seleccione un perfil">
                    <option selected>Seleccione un categoria</option>
                    <option value="Administrador">Desayuno</option>
                    <option value="Bebidas">Bebidas</option>
                    <option value="Entradas">Entradas</option>
                    <option value="Almuerzo">Almuerzo</option>
                    <option value="Postre">Postre</option>
                    <option value="Sopas"> Sopas</option>

                </select>
            </div>

            <div class="form-group col">
                <h6>Ocasion para la receta</h6>
                <select name="perfil" id="perfil" class="form-control" aria-label="Seleccione un perfil">
                    <option selected>Seleccione un ocasion</option>
                    <option value="Todas">Todas</option>
                    <option value="Cumpleaños">Cumpleaños</option>
                    <option value="Día del padre">Día del padre</option>
                    <option value="Día de la madre">Día de la madre</option>
                    <option value="Día del niño">Día del niño</option>
                    <option value="Navidad">Navidad</option>
                    <option value="Semana Santa">Semana Santa</option>
                    <option value="Verano"> Verano</option>
                    
                </select>
            </div>
            <div>
                <input type="submit" value="Guardar receta" class="btn btn-success btn-block mt-3" name="PONER EL NAME ">
            </div>
        </div>

            <div class="form-group m-5">
                AGREGAR SIDEBAR
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

</body>

</html>