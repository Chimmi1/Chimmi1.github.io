<?php
    include_once("includes/bd.php");
    include_once("session.php");

    if(isset($_GET['id'])){
        
        $result= $database->delete("receta_tb",["id"=>$_GET['id']]);

        if(!$result){
            die("Query Failed");
        }

        $_SESSION['mensaje']=" Receta eliminado correctamente!";
        $_SESSION['mensaje_tipo']="danger";

        header("location: recetas_registradas.php");
    }
?>