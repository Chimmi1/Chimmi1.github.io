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
    

    <section class="container text-center row align-items-center m-5">
        <div class="col d-none d-lg-block col-md-5 col-lg-5 col-xl-6">
          <img class="img-fluid" src="../recetario/img/comida.jpg" width="600" height="180" alt="ImgGrande">
        </div>
        <form action="registrar_usuario.php" class="col " method="post">
          <img class="img-fluid" src="../recetario/img/indentificador.png" width="200" height="60" alt="">
          <h2>Crea una cuenta</h2>

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

          <div class="mb-3">
            <h6>Tienes una cuenta? <a href="Login.php" class="refItem">Logueate aqui</a> </h6>
            
          </div>
          <div class="d-grid">
            <input type="submit" value="Registrarse" class="btn btn-primary btnItem" name="registrar_usuario"></input>
          </div>
        </form>
    
      </section>



    <?php
      include("includes/footer.php");
    ?>

</body>

</html>