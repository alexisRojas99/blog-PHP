<header>
        <div class="contenedor">
            <div class="logo izquierda">
                <p><a href="index.php">Mi Primer Blog</a></p>
            </div>

            <div class="derecha">
                <form class="buscar" action="<?php echo RUTA; ?>/buscar.php" method="GET">
                    <input type="text" placeholder="Buscar" name="busqueda">
                    <button type="submit" class="icono"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg></button>
                </form>
                <nav class="menu">
                    <ul>
                        <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                        <li><a href="#">Contacto <i class="bi bi-envelope-fill"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
</header>