<?php
require 'includes/templates/cabecera.php';

?>
            <div class="texto-principal margen-interno">
                <h1 id="mescribir">En esta página encontrarás una gran variedad de información acerca del mundo de los videojuegos, así como algunos productos que podemos ofrecer desde nuestro portal. Adentrate en este mundo, a través de VIDEOJU3GOS &copy;</h1>
            </div>
            <script src="./assets/js/productos.js"></script>
        </header>
        <section class="section margen-interno">
            <div class="articulos">
                <?php require('includes/templates/secciones.php'); ?>
               
    
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
        <?php require_once('includes/templates/footer.php'); ?>
    </div>
</body>
</html>