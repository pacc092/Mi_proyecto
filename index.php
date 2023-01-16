<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIDEOJU3GOS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/estilos.css">
    <link rel="icon" href="./assets/imagenes/icono.jpg">
</head>
<body>
    <div class="padre">
        <header class="header">
            <div class="menu margen-interno">
                <div class="logo">
                    <a href="./index.php">VideoGam3rs</a>
                </div>
                <nav class="nav">
                    <a href="./index.php"><i class="fa-solid fa-house"></i>Inicio</a>
                    <a href="./noticias.php"><i class="fa-solid fa-layer-group"></i>Noticias</a>
                    <a href="./productos.php"><i class="fa-solid fa-folder-open"></i>Productos</a>
                    <a href="./nosotros2.php"><i class="fa-solid fa-magnifying-glass"></i>Nosotros</a>
                </nav>
                <div class="social">
                    <div><a href="#"><i class="fa-brands fa-facebook"></i>facebook</a></div>
                    <div><a href="#"><i class="fa-brands fa-twitter"></i>Twitter</a></div>
                </div>
            </div>
            <div class="texto-principal margen-interno">
                <h1 id="mescribir">En esta página encontrarás una gran variedad de información acerca del mundo de los videojuegos, así como algunos productos que podemos ofrecer desde nuestro portal. Adentrate en este mundo, a través de VIDEOJU3GOS &copy;</h1>
            </div>
            <script src="./js/productos.js"></script>
        </header>
        <section class="section margen-interno">
            <div class="articulos">
                <article class="articulo1">
                    <figure>
                        <img src="./assets/imagenes/1366_2000.jpeg" alt="Play Station 5">
                        <figcaption><h2>El futuro ha llegado con Play Station 5</h2></figcaption>
                    </figure>
                    <p >La elegancia de la nueva consola de Sony por fin tiene sentido, con esta consola de nueva generación, cuyos gráficos están dispuestos a revolucionar el mundo de los videojuegos.</p>
                    <a id="ampliar" href="#">Leer más</a>
                </article>
                <article class="articulo1">
                    <figure>
                        <img src="./assets/imagenes/xboxS.jpg" alt="Play Station 5">
                        <figcaption><h2>Consola de nueva generación</h2></figcaption>
                    </figure>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat nisi, quod quaerat voluptatem labore repudiandae commodi illo laborum. Eveniet et, necessitatibus animi quas earum accusamus voluptatem blanditiis perferendis neque? Officia?</p>
                    <a id="ampliar" href="#";>Leer más</a>
                </article>
                <article class="articulo1">
                    <figure>
                        <img src="./assets/imagenes/switch.jpg" alt="Play Station 5">
                        <figcaption><h2>Consola de nueva generación</h2></figcaption>
                    </figure>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat nisi, quod quaerat voluptatem labore repudiandae commodi illo laborum. Eveniet et, necessitatibus animi quas earum accusamus voluptatem blanditiis perferendis neque? Officia?</p>
                    <a href="#">Leer más</a>
                </article>
                <article class="articulo1">
                    <figure>
                        <img src="./assets/imagenes/pcgamer.jpg" alt="Play Station 5">
                        <figcaption><h2>Consola de nueva generación</h2></figcaption>
                    </figure>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat nisi, quod quaerat voluptatem labore repudiandae commodi illo laborum. Eveniet et, necessitatibus animi quas earum accusamus voluptatem blanditiis perferendis neque? Officia?</p>
                    <a href="#">Leer más</a>
                </article>
                
                <nav class="navegacion">
                    <a href="#"></a>
                    <a href="#"></a>
                    <a href="#"></a>
                </nav>
            </div>
            <aside class="aside">
                <div class="publicidad">
                    <h4>YOUTUBE</h4>
                    <div class="videoyt">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/RkC0l4iekYo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    
                </div>
                <div class="publicidad">
                    <h4>YOUTUBE</h4>
                    <div class="videoyt">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/V_axU7XI4AE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                
            </aside>
        </section>
        <?php require_once('./templates/footer.php'); ?>
    </div>
</body>
</html>