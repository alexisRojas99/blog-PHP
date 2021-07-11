<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/estilos.css">
    <title>Blog</title>
</head>

<body>
    <?php require 'header.php' ?>
    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo">Nuevo Articulo</h2>
                <form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
                    <input type="text" name="titulo" placeholder="Titulo del Articulo">
                    <input type="text" name="extracto" placeholder="Extracto del Articulo">
                    <textarea name="texto" placeholder="Texto del Articulo"></textarea>
                    <input type="file" name="thumb">
                    <input type="submit" value="Crear Articulo">
                </form>
            </article>
        </div>
    </div>
    <?php require 'footer.php' ?>
</body>

</html>