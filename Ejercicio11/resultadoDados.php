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

    <h2 class="ejercicio-num"> EJERCICIO 11</h2>
    <br>
    <?php
    $dadosCant = $_POST["consultaAEJ11"];
    tirarDados($dadosCant);

    ?>

</div>


</body>

</html>

<!-- DESARROLLO DE LAS FUNCIONES DEL EJECICIO-->
<?php

function tirarDados($cantDados)
{
    $array = array();
    for ($i = 0; $i <= $cantDados; $i++) {
        $array[] = rand(1, 6);

    }
    imagenDado($array);
    echo $resultado = array_sum($array);


}

function imagenDado($array)
{
    $ruta_imagenesDados = "dadosImg/";

    foreach ($array as $arr) {
        echo '<img src="' . $ruta_imagenesDados . $arr . '" class="dadosImg">';
        echo '<span>'. $arr . ' </span>';
    }


}

?>