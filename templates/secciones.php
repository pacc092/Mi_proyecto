<?php
try{

if( !file_exists('videojuegos.csv')){
    throw new Exception('ERROR: Datos de propiedades no encontrados!');
}
if (($gestor = fopen('videojuegos.csv','rb')) == FALSE){
    throw new Exception('Error al recibir los datos');
}

}
catch (Exception $e){
echo 'ERROR: ', $e->getCode(),' - ',$e->getMessage(),'<br />';
}

?>

<div class="articulos">
<?php
    $titulos = ["id","imagen","titulo","texto"];
    while($datos = fgetcsv($gestor)):
        $propiedad = array_combine($titulos, $datos);
        /* echo '<pre>';
        var_dump($datos);
        echo '</pre>';
        echo '<pre>';
        var_dump($propiedad);
        echo '</pre>';*/
?> 
    
                <article class="articulo1">
                    <figure>
                        <img src="<?= WEBROOT ?>/imagenes/<?php echo $propiedad['imagen']; ?>" alt="Play Station 5">
                        <figcaption><h2><?php echo $propiedad['titulo'];?></h2></figcaption>
                    </figure>
                    <p ><?php echo $propiedad['texto']; ?></p>
                    <a id="ampliar" href="#">Leer más</a>
                </article>
    <?php endwhile; ?>
    </div>