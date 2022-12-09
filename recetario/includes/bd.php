<?php
    use Medoo\Medoo;
    require_once 'includes/Medoo.php';
    $database= new Medoo([
        'type' => 'mysql',
        'host' => 'localhost',
        'database' => 'recetario_bd',  
        'username' => 'root',
        'password' => '12345678'
      ]);
?>