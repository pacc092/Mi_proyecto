<?php
require('templates/cabecera.php');

$mensaje='';

if(isset($_POST['OK'])) {

var_dump($_POST);

  $nombre =$_POST['nombre'];
  
  $mensaje='';
  
  if ($nombre == '')
  
  { $mensaje .= "El nombre es obligatorio.\n"; }
  
  if (strlen($nombre) < 10)
  
  { $mensaje .= "El nombre debe tener al menos 10 caracteres.\n"; }
  
  
  
  
  $apellidos =($_POST['apellidos']);
  
  if ($apellidos == '')
  
  { $mensaje .= "El apellido es obligatorio.\n"; }
  
  if (strlen($apellidos) < 10)
  
  { $mensaje .= "El apellido debe tener al menos 10 caracteres.\n"; }
  
  
  
  
  $email =($_POST['email']);
  
  if ($email == '')
  
  { $mensaje .= "El email es obligatorio.\n"; }
  
  
  
  
  $descripción =($_POST['sugerencias']);
  
  if ($descripción == '')
  
  {$mensaje .= "Escriba que quiere saber y nos pondremos en contacto con usted.\n"; }
  
  if ($mensaje == '') {
  
  exit;}
  
  }
?>
            <div class="texto-principal margen-interno">
                <h1>Si estás interesado en mejorar nuestra página, dejanos tu opinión rellenando nuestro cuestionario. Agradeceremos las ideas que nos puedes aportar para ir añadiendo contenido.VIDEOJU3GOS &copy; estará encantado.</h1>
            </div>
        </header>
        <section class="section margen-interno">
            <div>
                <h1 class="cuestionario">CUESTIONARIO</h1>
            </div>
            <div>
<<<<<<< HEAD
                <form action="" name="miformulario" method="post" enctype="multipart/form-data" class="cuadros" novalidate>
=======
                <form action="contacto.php" name="miformulario" method="" enctype="multipart/form-data" class="cuadros">
>>>>>>> f7ff6584f81816019d5815c639e41f7880d73706
                    <fieldset>
                        <legend>Datos Personales</legend>
                        <label for="nombre">Nombre*</label>
                        <input type="text" id="nombre" name="nombre" class="mediana" autofocus autocomplete="off" required>
                  
                        <label for="apellidos">Apellidos</label>
                      <input type="text" id="apellidos" name="apellidos" placeholder="Apellidos" class="mediana">
                      
                      <br><br>
                      <label for="edad">Edad</label>
                      <input type="number" id="edad" name="edad" value="25" max="65" min="18"  class="pequenia">  
                  
                      <label for="sexo">Sexo</label>
                      <input type="radio" id="sexo" name="sexo" value="mujer" checked> Mujer
                      <input type="radio" id="sexo" name="sexo" value="hombre"> Hombre 
                    </fieldset>
                    
                    <fieldset>
                      <legend>Datos de Contacto</legend>
                      <label for="email">Email*</label>
                      <input type="email" id="email" name="email" >

                      <label for="dni">DNI</label>
                      <input type="dni" id="dni" name="dni" placeholder="00000000X">
                      
                      <label for="direccion">Dirección</label>
                      <input type="text" id="direccion" name="direccion" class="mediogrande" placeholder="Calle, nº, ciudad, Provincia">
                  
                      <br><br>
                      <label for="cp">Código Postal</label>
                      <input type="text" id="cp" name="cp" class="pequenia" maxlength="5">
                
                      <label for="provincia">Provincia</label>
                      <select id="provincia" name="provincia">
                          <option value="">- selecciona -</option>
                          <option value="15">A coruña</option>
                          <option value="1">Álava</option>
                          <option value="2">Albacete</option>
                          <option value="3">Alicante</option>
                          <option value="4">Almería</option>
                          <option value="33">Asturias</option>
                          <option value="5">Ávila</option>
                          <option value="6">Badajoz</option>
                          <option value="7">Baleares</option>
                          <option value="8">Barcelona</option>
                          <option value="9">Burgos</option>
                          <option value="10">Cáceres</option>
                          <option value="11">Cádiz</option>
                          <option value="39">Cantabria</option>
                          <option value="12">Castellón</option>
                          <option value="51">Ceuta</option>
                          <option value="13">Ciudad Real</option>
                          <option value="14">Córdoba</option>
                          <option value="16">Cuenca</option>
                          <option value="99">Extranjero</option>
                          <option value="17">Girona</option>
                          <option value="18">Granada</option>
                          <option value="19">Guadalajara</option>
                          <option value="20">Guipúzcoa</option>
                          <option value="21">Huelva</option>
                          <option value="22">Huesca</option>
                          <option value="23">Jaén</option>
                          <option value="26">La rioja</option>
                          <option value="35">Las palmas</option>
                          <option value="24">León</option>
                          <option value="25">Lleida</option>
                          <option value="27">Lugo</option>
                          <option value="28">Madrid</option>
                          <option value="29">Málaga</option>
                          <option value="52">Melilla</option>
                          <option value="30">Murcia</option>
                          <option value="31">Navarra</option>
                          <option value="32">Ourense</option>
                          <option value="34">Palencia</option>
                          <option value="36">Pontevedra</option>
                          <option value="37">Salamanca</option>
                          <option value="38">Santa cruz de tenerife</option>
                          <option value="40">Segovia</option>
                          <option value="41">Sevilla</option>
                          <option value="42">Soria</option>
                          <option value="43">Tarragona</option>
                          <option value="44">Teruel</option>
                          <option value="45">Toledo</option>
                          <option value="46">Valencia</option>
                          <option value="47">Valladolid</option>
                          <option value="48">Vizcaya</option>
                          <option value="49">Zamora</option>
                          <option value="50">Zaragoza</option>
                        </select>
                    </fieldset>
                  
                  
                    <fieldset>
                      <legend>Preferencias</legend>
                      
                      <label for="juegos">Tipo de Videojuego:</label>
                      <select id="juegos[]" name="juegos[]" multiple size="5">
                        <option value="A">Acción</option>
                        <option value="C">Terror</option>
                        <option value="F">Rol</option>
                        <option value="M">Fútbol</option>
                        <option value="?" selected="selected">No lo sé</option>    
                      </select>
                      
                      <label for="latas">Horas que juegas al día</label>
                      <input type="number" id="latas" name="latas" min="0"  max="24" value="24" step="1"  class="pequenia">
                      
                      <br><br>
                      Mejoras de la página<br>
                      <label for="pimiento">Más información </label>
                      <input type="checkbox" id="pimiento" name="pimiento" value="si" checked> 
                      <label for="champiñon">Más videos</label>
                      <input type="checkbox" id="champiñon" name="champinon" value="si">
                      <label for="queso">NS/NC</label>
                      <input type="checkbox" id="queso" name="queso" value="si"><br>
                      
                      <br>
                      <label for="sugerencias">Sugerencias</label><br>
                      <textarea id="sugerencias" name="sugerencias" class="grande"  rows="10" cols="80"></textarea>
                    </fieldset>
                  
                   
                  <fieldset> 
                      <input type="submit" name="OK" value="MANDAR DATOS"> 
                      
                      <input type="reset" value="Borrar datos"><br>
                      <input type="hidden" id="referencia" value="123456">   
                  </fieldset>  
                  </form>
            </div>
            
            
        </section>
        <?php require_once('./templates/footer.php'); ?>
    </div>
</body>
</html>