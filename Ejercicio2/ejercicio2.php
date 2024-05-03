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

    <h2 class="ejercicio-num"> EJERCICIO 2</h2>

    <p class="enunciado"><b>ENUNCIADO:</b> Cree una función llamada binomioCuadradoPerfecto que realice la ecuación de
        dicha problemática:
        recibe dos parámetros y devuelve el cuadrado de la suma de ambos (a+b)^2.
    <ol type="A" class="lista-objetivos">
        <li>función binomioCuadradoPerfecto_a($a, $b): Resuelva la solución utilizando la función de
            potencia
        </li>
        <li> función binomioCuadradoPerfecto_b($a, $b): Resuelva la solución utilizando la fórmula
            desarrollada del binomio: a
            2 + 2*a*b + b
        </li>
    </ol>
    </p>

    <div class="formulario">
        <form action="ejercicio2.php" method="post" enctype="application/x-www-form-urlencoded">
            <label for="consultaAEJ2" class="label">Ingrese el primer numero:</label>
            <input type="number" name="consultaAEJ2" class="campo-form" placeholder="Ejemplo: 24"><br>
            <label for="consultaBEJ2" class="label">Ingrese el segundo numero:</label>
            <input type="number" name="consultaBEJ2" class="campo-form" placeholder="Ejemplo: 16"><br>
            <button type="submit" class="boton-envio" name="Enviar2">ENVIAR</button>

        </form>
    </div>
    <?php

    if (isset($_POST["Enviar2"])) {
        $a = $_POST["consultaAEJ2"];
        $b = $_POST["consultaBEJ2"];
        echo "<b>RESULTADO:</b>";
        echo '<ol type="a" style="padding-left: 1.0em;>';
        echo "<li>";
        $resultadoEcucacion1 = binomioCuadradoPerfecto($a, $b);
        echo $resultadoEcucacion1;
        echo "</li>"; // Agregar </li>
        echo "<li>";
        $resultadoEcucacion2 = binomioCuadradoPerfecto_b($a, $b);
        echo $resultadoEcucacion2;
        echo "</li>"; // Agregar </li>
        echo "</ol>";

    }
    ?>
</div>

</body>

</html>

<!-- DESARROLLO DE LAS FUNCIONES DEL EJECICIO-->
<?php
function binomioCuadradoPerfecto($a, $b)
{
    $resultado = pow(($a + $b), 2);
    return $resultado;
}

function binomioCuadradoPerfecto_b($a, $b)
{

    $resultado = pow($a, 2) + 2 * $a * $b + pow($b, 2);

    return $resultado;
}

?>