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
    <p class="enunciado"><b>ENUNCIADO:</b> Realizar una web que permita indicar la cantidad de dados a lanzar (mediante
        input de tipo option) y al tocar un botón “lanzar dados” pase a una segunda pantalla donde muestre los dados lanzados
        como imagen y la suma de sus valores como puntaje obtenido.
    </p>
    <br>
    <br>
    <div class="formulario">
        <form action="resultadoDados.php" method="post" enctype="application/x-www-form-urlencoded">
            <label for="consultaAEJ11" class="label">Ingrese la cantindad de dados a tirar:</label><br>
            <input type="number" name="consultaAEJ11" class="campo-form" min="2" max="100"
                   placeholder="Ejemplo: 2,4,6 "><br>
            <button type="submit" class="boton-envio" name="Enviar11">ENVIAR</button>

        </form>
    </div>
    <?php
    if (isset($_POST["Enviar11"])){
        header("Location: resultadoDados.php");
        exit();
    }

    ?>
</div>


</body>

</html>

