<?php session_start(); 
require 'admin/phpConfig.php';
require 'funciones.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Usuario = limpiarDatos($_POST['usuario']);
    $Password = limpiarDatos($_POST['password']);

    if ($Usuario == $blog_admin['usuario'] && $Password == $blog_admin['clave']) {
         $_SESSION['admin'] = $blog_admin['usuario'];
         header('Location:'.RUTA.'admin');
    }
}
 
require 'views/login.view.php';