<?php session_start();
//Index del Admin

require 'phpConfig.php';
require '../funciones.php';

$conexion = conexion($bd_config);

comprobarSesion();

if (!$conexion) {
     header('Location: ../error.php');
}

$posts = obtenerPosts($blog_config['post_por_pagina'], $conexion);


require '../views/admin_index.view.php';