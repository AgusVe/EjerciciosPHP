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

    <h2 class="ejercicio-num"> EJERCICIO 4</h2>

    <p class="enunciado"><b>ENUNCIADO:</b> Cree una función llamada incrementar, que reciba una variable y sin devolver
        nada como retorno de
        la función, el valor del parámetro haya sido incrementado en 1.
    </p>
    <br>
    <br>
    <div class="formulario">
        <form action="ejercicio4.php" method="post" enctype="application/x-www-form-urlencoded">
            <label for="consultaEJ4" class="label">Ingrese el numero que desea incrementar:</label>
            <input type="number" name="consultaEJ4" class="campo-form" placeholder="Ejemplo: 100"><br>
            <button type="submit" class="boton-envio" name="Enviar4">ENVIAR</button>

        </form>
    </div>

    <?php
    require_once "ejercicio4.php";

    if (isset($_POST["Enviar4"])) {
        $numeroAIncrementar = $_POST["consultaEJ4"];
        incrementar($numeroAIncrementar);
        echo "<b>RESULTADO:</b>";
        echo $numeroAIncrementar;
    }
    ?>

</div>


</body>

</html>

<!-- DESARROLLO DE LAS FUNCIONES DEL EJECICIO-->
<?php
/*POR DEFECTO PHP LE PONE EL VALOR DE LA VARIABLE SOLO EN LA FUNCION
CUANDO ESTA TERMINA LA VARIABLE EN SI NO CAMBIA, SOLO SE MODIFICO DENTRO DE LA FUNCION*/

/*SI QUERES QUE ESTO NO PASE SE LE AGREGA UN & A LA VARIBLE COMO PARAMETRO, A ESTO SE LE LLAMA PASAR POR REFERENCIA*/
function incrementar(&$numero){
    $numero++;
}

?>