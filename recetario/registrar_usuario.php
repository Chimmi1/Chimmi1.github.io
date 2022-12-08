<?php

include("includes/bd.php");
include "mcript.php";

if(isset($_POST['registrar_usuario'])){

    $result=$database->select("usuario_tb","*");

    $id = count($result)+1;
    $usuario= $_POST['registroUsuario'];
    $contra= $encriptar($_POST['registroContrasena']);
    $perfil = "usuario";

    $resultado=$database->insert("usuario_tb",[
        "id"=>$id,
        "nombre_usuario"=>$usuario,
        "contra"=>$contra,
        "perfil"=>$perfil
    ]);

    if(!$resultado){
        die("Query failed");
    }
        $_SESSION['mensaje']="Usuario guardado correctamente!";
        $_SESSION['mensaje_tipo']='success';
        header("location: index.php");

}

?>