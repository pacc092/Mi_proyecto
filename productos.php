<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="./assets/css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link rel="icon" href="./assets/imagenes/icono.jpg">
</head>
<body>
    <div class="padrep">
        <header id="productos">
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
            <div class="texto-principal margen-internos contenedor-slider">
                
               <div class="miSlider fade">
                    <div class="numerotxt">1/3</div>
                    <img class="imgsld" src="assets/imagenes/hogwarts-legacy.jpg" style=" width: 100%">
                    <div class="txt">Proximamente disponible nuestra web!!!</div>
               </div>
               <div class="miSlider fade">
                    <div class="numerotxt">2/3</div>
                    <img class="imgsld" src="./assets/imagenes/packps5.jpg" style="width: 100%;">
                    <div class="txt">Pack de Ps5 y mando extra...PROXIMAMENTE!!!</div>
               </div>
               <div class="miSlider fade">
                    <div class="numerotxt">3/3</div>
                    <img class="imgsld" src="./assets/imagenes/variedad de juegos.jpg" style="width: 100%;">
                    <div class="txt">Un amplio catálogo de videjuegos estarán pronto disponibles</div>
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

            </div>
            <br>
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
            <script src="./assets/js/productos.js"></script>
        </header>

        <section class="sectionp margen-interno">
            <div class="articulosp">
                <article class="articulo1">
                    <figure>
                        <img src="./assets/imagenes/packps5.jpg" alt="Play Station 5">
                        <figcaption><h2>El futuro ha llegado con Play Station 5</h2></figcaption>
                    </figure>
                    <p>¡Nueva oferta disponible para estas navidades con este pack de la Play Station 5 y FIFA&copy;23!</p>
                    <a href="#">Comprar el pack</a>
                </article>
                <article class="articulo1">
                    <figure>
                        <img src="./assets/imagenes/p2.jpg" alt="Play Station 5">
                        <figcaption><h2>Monitor gaming en oferta</h2></figcaption>
                    </figure>
                    <p>¿Te atreves con el mundo gamer? Esta es tu oportunidad, llévate este monitor a un precio asequible.</p>
                    <a href="#">Acceder a la oferta</a>
                </article>
                <article class="articulo1">
                    <figure>
                        <img src="./assets/imagenes/p3.jpg" alt="camiseta">
                        <figcaption><h2>¿Eres de los que colecciona camisetas con portada de videojuegos?</h2></figcaption>
                    </figure>
                    <p>Durante este mes existirá una serie de packs de camisetas en oferta, no desaproveches y hazte con uno... o varios packs. Date prisa que se terminan.</p>
                    <a href="#">Ver ofertas</a>
                </article>
                <article class="articulo1">
                    <figure>
                        <img src="./assets/imagenes/p4.jpg" alt="Play Station 5">
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
            
        </section>
        <?php require_once('./templates/footer.php'); ?>
    </div>
</body>
</html>