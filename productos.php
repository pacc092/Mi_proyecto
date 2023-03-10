<?php
require 'includes/templates/cabecera.php';
?>
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
        <?php require_once('includes/templates/footer.php'); ?>
    </div>
</body>
</html>