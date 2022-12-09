<?php
include("session.php");
?>


    <nav class="navbarCSS navbar fixed-top navbar-expand-md navbar-dark">
        <div class="container centernav">
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
                    <li class="nav-item active"><a class="nav-link active" href="top_recetas.php">Recetas</a></li>
                    <li class="nav-item active"><a class="nav-link active" href="top_recetas.php">Tips</a></li>
                    <li class="nav-item dropdown"><a class="nav-link active dropdown-toggle" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Categorias</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a href="top_recetas.html" class="dropdown-item">Sopas</a></li>
                            <li><a href="top_recetas.html" class="dropdown-item">Ensaladas</a></li>
                            <li><a href="top_recetas.html" class="dropdown-item">Miscelaneos</a></li>
                        </ul>
                    </li>
                </ul>
                <form action="" class="d-flex navbarSpace">
                    <input type="text" class="form-control me-2">
                    <button type="submit" class="btn btn-primary btnItem">Buscar</button>
                </form>
                <div>
                    <ul class="navbav-nav navbarItems">
                        <li class="dropdown"><a class="active dropdown-toggle" id="userDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">
                        <img src="../recetario/img/userIcon.png" height="50" width="50" alt=""></a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">>
                            <li><a href="recetas_usuario.php" class="dropdown-item">
                            <h2> <?php echo $login_session?> </h2></a></li>
                            <li><a href="logout.php" class="dropdown-item">
                                <?php
                                if ($login_session) {
                                    echo "<h5> Cerrar Sesion </h5>";
                                }else{
                                    echo "<h3>iniciar sesion</h3>";
                                }
                                ?>
                            </a></li>
                        </ul>
                        </li>
                    </ul>
                </div>
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


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

        