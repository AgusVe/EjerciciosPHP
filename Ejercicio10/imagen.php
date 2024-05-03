<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guía práctica de ejercicios PW2</title>
    <link rel="stylesheet" href="http://localhost/css/index.css">
</head>

<body>
<!--INMPORT DEL HEADER-->
<?php
include_once "../header/header.php";
?>
<!--HTML DEL EJERCICIO-->
<div class="div-ejercicio">

    <h2 class="ejercicio-num"> EJERCICIO 9</h2>

    <p class="enunciado"><b>ENUNCIADO:</b> Reutilizando el ejercicio anterior, realizar una web que liste todos los nombres de imagenes que
        contiene en la carpeta /imagenes cómo link, que al hacer clic, lleve a una segunda pantalla donde
        efectivamente se muestre dicha imagen.
    </p>
    <br>
    <?php
    $ruta_imagenes="../imagenes/";
   if(isset($_GET["nombre"])){
       $nombre_imagen=$_GET["nombre"];
       echo '<span class="alt-text">' . $nombre_imagen . '</span>';
       echo '<img src="'. $ruta_imagenes . $nombre_imagen . '" >';

   }
    ?>

</div>

