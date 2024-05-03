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

    <h2 class="ejercicio-num"> EJERCICIO 10</h2>

    <p class="enunciado"><b>ENUNCIADO:</b> Reutilizando el ejercicio anterior, realizar una web que liste todos los nombres de imagenes que
        contiene en la carpeta /imagenes cómo link, que al hacer clic, lleve a una segunda pantalla donde efectivamente se muestre dicha imagen.

    </p>
    <br>
        <?php

        $ruta_imagenes = "../imagenes/";
        /*La función scandir() es para obtener una lista de todos los archivos en la carpeta "imagenes"
          Esto guarda los nombre de los archivos solamente, no hay ningun tipo de dato compatible para guardar un
          archivo en php por eso solo guarda el nombre*/
        $list_imagenes = scandir($ruta_imagenes);
        $imagenes = array();
        foreach ($list_imagenes as $archivo) {
            $extension = pathinfo($archivo, PATHINFO_EXTENSION);
            if (in_array($extension, array('jpg', 'jpeg', 'png', 'gif'))) {
                $imagenes[] = $archivo;
            }
        }

        foreach ($imagenes as $img) {
            echo '<div class="imagenes-ejer9">';
            echo '<a href="imagen.php?nombre='. $img . '" class="alt-text">' . $img . '</a>';
            echo '</div>';
            echo '<br>';
        }
        ?>
<br>
    <div class="formulario">
        <form action="ejercicio9.php" method="post" enctype="multipart/form-data">
            <label for="archivo" class="label">Cargar imagen:</label>
            <input type="file" name="archivo"><br><br>
            <label for="nombre" class="label">Nombre que quieras poner a la imagen:</label>
            <input type="text" name="nombre" class="campo-form"><br>
            <button type="submit" class="boton-envio" name="Enviar">ENVIAR</button>

        </form>
    </div>
    <?php
    if (isset($_POST["Enviar"])) {

        $nombre_archivo = $_POST["nombre"];

        // Obtener la extensión del archivo original
        $extension = pathinfo($_FILES["archivo"]["name"], PATHINFO_EXTENSION);

        // Concatenar la extensión al nombre personalizado
        $nombre_archivo_con_extension = $nombre_archivo . '.' . $extension;

        /* LA FUNCIÓN MOVE_UPLOADED_FILE() ES PARA MOVER LA IMAGEN DESDE LA UBICACIÓN TEMPORAL EN LA QUE SE CARGA AL SERVIDOR
        EN UNA UBICACIÓN PERMANENTE EN TU SERVIDOR. EL ARRELGLO $_FILE ES UN ARRAY BIDIMENSIONAL QUE SE LLAMA
        CON LOS NOMBRES PUESTOS EN [][] EL tmp_name ES EL NOMBRE POR DEFECTO QUE RESIVE EL ARCHIVO TEMPORAL*/
        move_uploaded_file($_FILES["archivo"]["tmp_name"], "../imagenes/" . $nombre_archivo_con_extension);

        /*EN PHP, LA FUNCIÓN HEADER() SE UTILIZA PRINCIPALMENTE PARA ENVIAR EL ENCABEZADO LOCATION, QUE SE UTILIZA
        PARA REDIRECCIONAR AL USUARIO A OTRA PÁGINA.*/
        header('Location: ejercicio10.php');
        exit();
    }
    /*PROBLEMAS CON EXTENSION DEL ARCHIVO Y NOMBRE PERSONALIZADO
    MI CODIGO ERA ESTE:
     if(isset($_POST["Enviar"])){
    move_uploaded_file($_FILES["archivo"]["tmp_name"],"../imagenes/" . $_POST["nombre"]);
    header('Location: ejercicio9.php');
    exit();
}
    PERO SEGUN CHATGPT NO SIEMPRE ES NECESARIO
    NO NECESARIAMENTE, PUEDES PONER UN NOMBRE PERSONALIZADO SIN INCLUIR LA EXTENSIÓN DEL ARCHIVO EN EL NOMBRE. SIN EMBARGO,
    ES UNA BUENA PRÁCTICA INCLUIR LA EXTENSIÓN DEL ARCHIVO EN EL NOMBRE PERSONALIZADO PARA ASEGURARTE DE QUE EL ARCHIVO SE GUARDA CON LA EXTENSIÓN CORRECTA.

    SI NO INCLUYES LA EXTENSIÓN EN EL NOMBRE PERSONALIZADO, EL ARCHIVO SE GUARDARÁ CON EL NOMBRE QUE HAYAS ELEGIDO,
     PERO SIN EXTENSIÓN, LO QUE PUEDE GENERAR CONFUSIÓN Y DIFICULTADES A LA HORA DE TRABAJAR CON EL ARCHIVO EN EL FUTURO.
*/


    ?>
</div>

