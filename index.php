<?php require 'admin/phpConfig.php';
require 'funciones.php';

$conexion = conexion($bd_config);

if (!$conexion) {
     header('Location: error.php');
}

$posts = obtenerPosts($blog_config['post_por_pagina'], $conexion);

// print_r($posts);

if (!$posts) {
    header('Location: error.php');
}

require 'views/index.view.php';