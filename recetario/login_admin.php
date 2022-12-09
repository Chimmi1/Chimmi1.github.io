<?php
include("includes/bd.php");
include "mcript.php";
session_start();

if (isset($_POST['iniciar_admin'])) {

  $usuario = $_POST['usuarioAdmin'];
  $contra = $_POST['contraAdmin'];

  $user = $database->select("usuario_tb", "*", ["nombre_usuario" => $usuario]);
  
  if (count($user) > 0) {

    if ($desencriptar($user[0]['contra'])===$contra && $user[0]['perfil']=="administrador") {
      $_SESSION['login_user'] = $usuario;
      header("location: menu_admin.php");
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
</head>

<body>
    <!--- Este es el header-->
    <header>
        <!--- IMPORTAR HEADER-->
    </header>
    <!--- FIN del header-->
    
    <section class="container text-center jus row p-5 align-items-center m-5">
        <form action="" method="post">
          <img src="../recetario/img/indentificador.png" width="200" height="60" alt="">
          <h2>Iniciar sesion como admin</h2>
          <div class="form-group mb-3">
            <label for="CorreoElectronico">Nombre de usuario</label>
            <input type="text" class="form-control"  name="usuarioAdmin" aria-describedby="emailHelp"
              placeholder="Ingrese su correo electrónico">
          </div>
          <div class="form-group mb-3">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control"  name="contraAdmin" placeholder="Ingrese su contraseña">
          </div>
          
          <div class="d-grid">
            <button type="submit" class="btn btn-primary " name="iniciar_admin" >Iniciar sesion</button>
          </div>
        </form>
    
      </section>

    <footer>
       
    </footer>

</body>

</html>