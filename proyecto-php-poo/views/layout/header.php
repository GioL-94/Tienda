<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Tienda de Camisetas</title>
        <link rel="stylesheet" href="<?= base_url ?>assets/css/styles.css" />
    </head>
    <body>
        <div id="container">
            <!-- CABECERA -->
            <header id="header">
                <div id="logo">
                    <img src="<?= base_url ?>assets/img/camiseta.png" alt="Camiseta Logo" />
                    <a href="<?= base_url ?>">
                        Tienda de camisetas
                    </a>
                </div>
            </header>

            <!-- MENU -->
            <?php $categorias = Utils::showCategorias(); ?>
            <nav class="menu">
                <ul id="frst">
                    <li id="item"><a href="<?= base_url ?>">Inicio</a></li>

                    <li id="item"><a href="#">Categorías</a>
                        <ul class="submenu">
                            <?php while ($cat = $categorias->fetch_object()): ?>
                                <li class="cat">
                                    <a href="<?=base_url?>categoria/ver&id=<?=$cat->id?>"><?= $cat->nombre ?></a>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    </li>

                    <li id="item"><a href="#">Carrito</a></li>
                </ul>
            </nav>

            <div id="content">