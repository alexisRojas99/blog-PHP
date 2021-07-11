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
    <?php require 'views/header.php'; ?>
    <!-- <img src="iconos/icons/alarm.svg" alt="Bootstrap" width="32" height="32"> -->

    <div class="contenedor">
        <div class="post">
            <article>
                <h2 class="titulo"><?php echo $post['Titulo']; ?></h2>
                <p class="fecha"><?php echo fecha($post['Time']); ?></p>
                <p class="extracto"><?php echo nl2br($post['Extracto']); ?></p>
                <div class="thumb">
                    <a href="#"><img src="<?php echo RUTA; ?>/imagenes subidas/<?php echo $post['Thumb'] ?>" alt=""></a>
                </div>
                <p class="extracto"><?php echo nl2br($post['Texto']); ?></p>
            </article>
        </div>
    </div>

    <?php require 'footer.php' ?>
</body>

</html>