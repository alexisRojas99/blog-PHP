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
        <h2><?php echo $titulo; ?></h2>
        <?php foreach ($resultados as $post) : ?>
            <div class="post">
                <article>
                    <h2 class="titulo"><a href="single.php?id=<?php echo $post['Id'] ?>"><?php echo $post['Titulo']; ?></a></h2>
                    <p class="fecha"><?php echo $post['Time']; ?></p>
                    <div class="thumb">
                        <a href="#"><img src="<?php echo RUTA; ?>/imagenes subidas/<?php echo $post['Thumb'] ?>" alt=""></a>
                    </div>
                    <p class="extracto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur ad temporibus cumque labore sunt saepe.</p>
                    <a href="single.php?id=<?php echo $post['Id'] ?>" class="continuar">Continuar Leyendo</a>
                </article>
            </div>
        <?php endforeach; ?>

        <?php require 'paginacion.php'; ?>
    </div>

    <?php require 'footer.php' ?>
</body>

</html>