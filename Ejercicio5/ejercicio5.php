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

    <h2 class="ejercicio-num"> EJERCICIO 5</h2>
    <p class="enunciado"><b>ENUNCIADO:</b> Cree una función sumatoria que reciba un vector cómo parámetro, y devuelva la
        suma de todos sus
        valores.
    <ol type="A" class="lista-objetivos">
        <li>función sumatoria_a( $array ): Resuelva la solución utilizando la estructura de control for</li>
        <li>función sumatoria_b( $array ): Resuelva la solución utilizando la estructura for each</li>
        <li>función sumatoria_c( $array ): Resuelva la solución utilizando la estructura de control while</li>
    </ol>
    </p>

    <div class="formulario">
        <form action="ejercicio5.php" method="post" enctype="application/x-www-form-urlencoded">
            <label for="consultaAEJ5" class="label">Ingrese un conjunto de numeros SEPARADOS POR COMA:</label><br>
            <input type="text" name="consultaAEJ5" class="campo-form" placeholder="Ejemplo: 2,6,9,8 "><br>
            <button type="submit" class="boton-envio" name="Enviar5">ENVIAR</button>

        </form>
    </div>
    <?php
    require_once "ejercicio5.php";
    if (isset($_POST["Enviar5"])) {

        $array = $_POST["consultaAEJ5"];

        /*CON AYUDA DE CHATGPT */
        /* LA FUNCION EXPLODE DIVIDE UNA CADENA EN VARIAS PARTES,
        * UTILIZANDO UN SEPARADOR ESPECÍFICO (, o -). LA FUNCIÓN DEVUELVE UN ARRAY DE CADENAS, DONDE CADA ELEMENTO DEL ARRAY ES UNA PORCIÓN DE LA CADENA ORIGINAL
        * QUE FUE SEPARADA POR EL SEPARADOR.
        *
        * LA FUNCIÓN ARRAY_MAP() EN PHP ES UNA FUNCIÓN DE ORDEN SUPERIOR (FUNCIÓN QUE TOMA OTRA FUNCIÓN COMO ARGUMENTO) QUE TOMA UNA O MÁS MATRICES COMO ARGUMENTOS Y
        * DEVUELVE UNA NUEVA MATRIZ DESPUÉS DE APLICAR UNA FUNCIÓN DE DEVOLUCIÓN DE LLAMADA A CADA ELEMENTO DE LA MATRIZ ORIGINAL
        * EN ESTE CASO USA LA FUNCION (COMO PARAMETRO) INTVAL, QUE CONVIERTE LOS VALORES EN NUMEROS ENTEROS
        *
        * */
        $array = explode(",", $array);
        $array = array_map('intval', $array);
        echo "<b>RESULTADO:</b>";

        echo '<ol type="a" style="padding-left: 1.0em;>';
        echo "<li>";
        $sumaDeArray = sumatoria($array);
        echo $sumaDeArray;
        echo "</li>";
        echo "<li>";
        $sumaDeArray_b = sumatoria_b($array);
        echo $sumaDeArray_b;
        echo "</li>";
        echo "<li>";
        $sumaDeArray_c = sumatoria_c($array);
        echo $sumaDeArray_c;
        echo "</li>";
        echo "</ol>";
    }
    ?>
</div>


</body>

</html>

<!-- DESARROLLO DE LAS FUNCIONES DEL EJECICIO-->
<?php
function sumatoria($array)
{
    $resultado = 0;
    for ($i = 0; $i < count($array); $i++) {
        $resultado += $array[$i];
    }
    return $resultado;
}
function sumatoria_b($array){
    $resultado = 0;
    foreach ($array AS $valor){
        $resultado += $valor;
    }
    return $resultado;
}
function sumatoria_c($array){
    $resultado = 0;
    $i=0;
    while ($i< count($array)){
        $resultado += $array[$i];
        $i++;
    }
return $resultado;
}


?>