<?php require 'admin/phpConfig.php';
require 'funciones.php';

$conexion = conexion($bd_config);

if (!$conexion) {
     header('Location: error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])) {
     $busqueda = limpiarDatos($_GET['busqueda']);

     $statement = $conexion->prepare("SELECT * FROM blog WHERE Titulo LIKE :busqueda or Texto LIKE :busqueda");

     $statement->execute(array(':busqueda' => "%$busqueda%"));
     $resultados = $statement->fetchAll();

     if (empty($resultados)) {
        $titulo = 'No se encontraron resultados de la busqueda realizada :c';
     } else {
        $titulo = 'Resultado de la busqueda: '.$busqueda;
     }
} else {
     header('Location: index.php');
}

require 'views/buscar.view.php';