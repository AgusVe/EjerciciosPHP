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

    <h2 class="ejercicio-num"> EJERCICIO 3</h2>

    <p class="enunciado"><b>ENUNCIADO:</b> Cree una función concatenar($texto1, $texto2) que reciba dos textos como
        parámetro y devuelva ambos textos concatenados como uno solo.
    </p>
    <br>
    <br>

    <div class="formulario">
        <form action="ejercicio3.php" method="post" enctype="application/x-www-form-urlencoded">
            <label for="consultaAEJ3" class="label">Ingrese el primer comentario:</label>
            <input type="text" name="consultaAEJ3" class="campo-form" placeholder="Ejemplo: Hola!"><br>
            <label for="consultaBEJ3" class="label">Ingrese el segundo comentario:</label>
            <input type="text" name="consultaBEJ3" class="campo-form" placeholder="Ejemplo: Como andas?"><br>
            <button type="submit" class="boton-envio" name="Enviar3">ENVIAR</button>

        </form>
    </div>

    <?php
    require_once "ejercicio3.php";

    if (isset($_POST["Enviar3"])) {
        $texto1 = $_POST["consultaAEJ3"];
        $texto2 = $_POST["consultaBEJ3"];
        $texto = concatenar($texto1, $texto2);
        echo "<b>RESULTADO:</b>";
        echo $texto;
    }
    ?>
</div>


</body>

</html>

<!-- DESARROLLO DE LAS FUNCIONES DEL EJECICIO-->
<?php
function concatenar($texto1, $texto2)
{

    return $texto1 . " " . $texto2;
}

?>