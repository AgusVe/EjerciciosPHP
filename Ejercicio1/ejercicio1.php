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

    <h2 class="ejercicio-num"> EJERCICIO 1</h2>

    <p class="enunciado"><b>ENUNCIADO:</b> Cree una función llamada Semaforo, que recibe por
        parametro un cólor cómo texto (“rojo”
        “amarillo”,”verde”). Dicha función devolverá el estado que corresponde: “frene”, “precaución”,
        “avance” o “estado desconocido” ante un caso no esperado.
    <ol type="A" class="lista-objetivos">
        <li>función semaforo_a($color): Resuelva la solución utilizando if else</li>
        <li>función semaforo_b($color): Resuelva la solución utilizando if inline (return ?: )</li>
        <li>función semaforo_c($color): Resuelva la solución utilizando switch</li>
    </ol>
    </p>

    <div class="formulario">
        <form action="ejercicio1.php" method="post" enctype="application/x-www-form-urlencoded">
            <label for="consulta" class="label">Ingrese el color del semaforo:</label>
            <input type="text" name="consulta" class="campo-form" placeholder="Rojo, Amarrilo, Verde"><br>
            <button type="submit" class="boton-envio" name="Enviar">ENVIAR</button>

        </form>
    </div>

    <!--RESULTADO-->
    <?php
    /*REQUIERE_ONCE CORTA LA EJECUCION DEL RESTO DEL CODIGO SI HAY UN PROBLEMA EN ESA LINEA, EL INCLUDE NO*/
/*    require_once "ejercicio1.php";*/

    if (isset($_POST["Enviar"])) {
        $color = $_POST["consulta"];
        echo "<b>RESULTADO:</b>";
        echo '<ol type="a" style="padding-left: 1.0em;">';
        echo "<li>";
        semaforo_a($color);
        echo "</li>"; // Agregar </li>
        echo "<li>";
        echo semaforo_b($color);
        echo "</li>"; // Agregar </li>
        echo "<li>";
        echo semaforo_c($color);
        echo "</li>"; // Cambiar </ul> por </ol>
        echo "</ol>"; // Agregar </ol>
    }
    ?>
</div>

</body>

</html>


<!-- DESARROLLO DE LAS FUNCIONES DEL EJECICIO-->
<?php
function semaforo_a($color)
{

    if ($color == 'rojo') {
        echo 'frene';
    } elseif ($color == 'amarillo') {
        echo 'precaución';
    } elseif ($color == 'verde') {
        echo 'avance';
    } else {
        echo 'estado desconocido';
    }

}


function semaforo_b($color)
{

    /* LO QUE ESCRIBI (ESTA MAL) EL RETURN FUNCIONA SOLO CON UNA VARIABLE
    $frene= $color=='rojo'? 'frene': 'estado desconocido';
    $precausion= $color=='amarillo'? 'precaución': 'estado desconocido';
    $avance= $color=='verde'? 'avance': 'estado desconocido';

    if($frene=='frene' || $precausion=='precaución' || $avance=='avance'){
    return $frene;
    }
*/
    /*LO QUE ESCRIBIO CHATGPT*/
    $accion = $color == 'rojo' ? 'frene' :
        ($color == 'amarillo' ? 'precaución' :
            ($color == 'verde' ? 'avance' : 'estado desconocido'));

    return $accion;

}

function semaforo_c($color)
{
    switch ($color) {
        case "rojo":
            return "frene";
            break;
        case "amarillo":
            return "precaución";
            break;
        case "verde":
            return "avance";
            break;
        default:
            return "estado desconocido";
            break;
    }

}

?>
