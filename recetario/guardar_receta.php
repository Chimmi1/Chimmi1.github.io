<?php

include("includes/bd.php");

if(isset($_POST['guardar_receta'])){

    $result=$database->select("receta_tb","*");

    $id = count($result)+1;
    $titulo= $_POST['titulo'];
    $img = $_POST['receta_img'];
    $tiempo_preparacion = $_POST['tiempo_preparacion'];
    $tiempo_coccion = $_POST['tiempo_coccion'];
    $tiempo_total = $_POST['tiempo_total'];
    $porciones = $_POST['porciones'];
    $complejidad = $_POST['complejidad'];
    $categoria = $_POST['categoria'];
    $ocasion = $_POST['ocasion'];
    $paso1 = $_POST['paso1'];
    $paso2 = $_POST['paso2'];
    $paso3 = $_POST['paso3'];
    $descripcion = $_POST['descripcion'];
    $ingrediente1 = $_POST['ingrediente1'];
    $ingrediente2 = $_POST['ingrediente2'];
    $ingrediente3 = $_POST['ingrediente3'];


    $resultado=$database->insert("receta_tb",[
        "id"=>$id,
        "titulo"=>$titulo,
        "img"=>$img,
        "tiempo_preparacion"=>$tiempo_preparacion,
        "tiempo_coccion"=>$tiempo_coccion,
        "tiempo_total"=>$tiempo_total,
        "porciones"=>$porciones,
        "complejidad"=>$complejidad,
        "categoria"=>$categoria,
        "ocasion"=>$ocasion,
        "votos"=>0,
        "descripcion"=>$descripcion,
        "paso1"=>$paso1,
        "paso2"=>$paso2,
        "paso3"=>$paso3,
        "ingrediente1"=>$ingrediente1,
        "ingrediente2"=>$ingrediente2,
        "ingrediente3"=>$ingrediente3
    ]);

    if(!$resultado){
        die("Error de registro");
    }
        $_SESSION['mensaje']="receta guardada correctamente!";
        $_SESSION['mensaje_tipo']='success';
        header("location: index.php");

}

?>