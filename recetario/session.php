<?php
    include('includes/bd.php');
    session_start();

    $user_check= $_SESSION['login_user'];
    $result=$database->select("usuario_tb","*",["nombre_usuario"=>$user_check]);

    $login_session= $result[0]['nombre_usuario'];
?>