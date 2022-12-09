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
            <form action="guardar_receta.php" method="post">
                <div class="row m-5">
                    <div class="form-group col-2 ">
                    <h4 class="mb-3">Subir imagen</h4>
                    <img src="../recetario/img/downIcon.png" height="50" width="50" alt="">
                    <input type="file" name="receta_img" id="recetaImg" required>
                        
                    </div>

                    <div class="col-3 " >
                        <h4 class="mb-3">Titulo de la receta</h4>
                        <h4 class="mb-3">Descripcion</h4>
                        <h4 class="mb-3">Porciones</h4>

                    </div>
                    <div class="form-group col-7">
                        <input type="text" name="titulo" class="form-control mb-2" required placeholder="Titulo de la receta" autofocus required>
                        <input type="text" name="descripcion" class="form-control mb-2" required placeholder="Descripcion" >
                        <input type="text" name="porciones" class="form-control mb-2" required placeholder="Porciones" >
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
                    <div class="form-group col">

                        <input type="text" name="tiempo_preparacion" class="form-control" required placeholder="Tiempo de preparacion">
                    </div>
                    <div class="form-group col">
                        
                        <input type="text" name="tiempo_coccion" class="form-control" required placeholder="Tiempo de coccion" >
                    </div>
                    <div class="col">
                        <input type="form-group text" name="tiempo_total" class="form-control" required placeholder="Tiempo total" >
                    </div>
                </div>

                <div class="row m-3 ">
                    <div class="form-group col">
                        <h4>Lista de ingredientes</h4>
                        <ul class="list-group">
                            <li class="list-group-item "><input type="text" name="ingrediente1" class="form-control" placeholder="ingrediente 1"></li>
                            <li class="list-group-item"><input type="text" name="ingrediente2" class="form-control" placeholder="ingrediente 2"></li>
                            <li class="list-group-item"><input type="text" name="ingrediente3" class="form-control" placeholder="ingrediente 3"></li>
                        </ul>
                    </div>

                    <div class="form-group col">
                        <h4>Instrucciones</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><input type="text" name="paso1" class="form-control" placeholder="paso 1"></li>
                            <li class="list-group-item"><input type="text" name="paso2" class="form-control" placeholder="paso 2"></li>
                            <li class="list-group-item"><input type="text" name="paso3" class="form-control" placeholder="paso 3"></li>
                        </ul>
                    </div>

                </div>

                <div class="row m-3 ">
                <div class="form-group col">
                    <h6>Nivel de complejidad</h6>
                    <select name="complejidad" id="complejidad" class="form-control" required aria-label="Seleccione un perfil">
                        <option selected>Nivel de complejidad</option>
                        <option value="facil">Fácil</option>
                        <option value="intermedio">Intermedio</option>
                        <option value="dificil">Avanzado</option>
                    </select>
                </div>

                <div class="form-group col">
                    <h6>Categoria de la receta</h6>
                    <select name="categoria" id="categoria" class="form-control" required aria-label="Seleccione un perfil">
                        <option selected>Seleccione un categoria</option>
                        <option value="desayuno">Desayuno</option>
                        <option value="bebidas">Bebidas</option>
                        <option value="entradas">Entradas</option>
                        <option value="almuerzo">Almuerzo</option>
                        <option value="postre">Postre</option>
                        <option value="sopas"> Sopas</option>

                    </select>
                </div>

                <div class="form-group col">
                    <h6>Ocasion para la receta</h6>
                    <select name="ocasion" id="ocasion" class="form-control" required aria-label="Seleccione un perfil">
                        <option selected>Seleccione un ocasion</option>
                        <option value="todas">Todas</option>
                        <option value="cumpleanos">Cumpleaños</option>
                        <option value="diaPadre">Día del padre</option>
                        <option value="diaMadre">Día de la madre</option>
                        <option value="diaNino">Día del niño</option>
                        <option value="navidad">Navidad</option>
                        <option value="semanaSanta">Semana Santa</option>
                        <option value="verano"> Verano</option>
                        
                    </select>
                </div>
                <div>
                    <input type="submit" value="Guardar receta" class="btn btn-success btn-block mt-3" name="guardar_receta">
                </div>
            </form>
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