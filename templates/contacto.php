<?php

$mensaje=' ';

if(isset($_POST['OK'])) {



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