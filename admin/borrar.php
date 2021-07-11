<?php session_start();

require 'phpConfig.php';
require '../funciones.php';

comprobarSesion();

$conexion = conexion($bd_config);

if (!$conexion) {
    header('Location: ../error.php');
}
 
$id = limpiarDatos($_GET['id']);

if (!$id) {
     header('Location: '.RUTA.'admin');
}

$statement = $conexion->prepare("DELETE FROM blog WHERE Id = :id");

$statement->execute(array(':id' => $id));

header('Location: '.RUTA.'admin');