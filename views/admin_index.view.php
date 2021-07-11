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
    <?php require '../views/header.php'; ?>
    <!-- <img src="iconos/icons/alarm.svg" alt="Bootstrap" width="32" height="32"> -->

    <div class="contenedor">
        <h2>Panel de Control</h2>
        <a href="nuevo.php" class="btn">Nuevo Post</a>
        <a href="cerrar-sesion.php" class="btn">Cerrar sesion</a>
        <?php foreach($posts as $post) : ?>
            <div class="post">
                <article>
                    <h2 class="titulo"><?php echo $post['Id'].' - '.$post['Titulo']; ?></h2>
                    <a href="editar.php?id=<?php echo $post['Id'] ?>">Editar</a>
                    <a href="../single.php?id=<?php echo $post['Id'] ?>">Ver</a>
                    <a href="borrar.php?id=<?php echo $post['Id'] ?>">Borrar</a>
                </article>
            </div>
        <?php endforeach; ?>

        <?php require '../paginacion.php' ?>
    </div>

    <?php require '../views/footer.php' ?>
</body>

</html>