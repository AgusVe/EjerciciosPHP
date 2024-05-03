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

    <h2 class="ejercicio-num"> EJERCICIO 6</h2>

    <p class="enunciado"><b>ENUNCIADO:</b> Cree una clase llamada Saludar, la misma tendrá un constructor que reciba
        nombre, apellido de una persona.
    <ol type="A" class="lista-objetivos">
        <li> Dicha clase debe implementar el método saludoFormal( $horario ) el cual debe responder
            concatenado al nombre un prefijo dependiendo del horario:
            05hs a 13hs “Buenos días”
            13hs a 21hs “Buenas tardes”
            21hs a 05hs “Buenas noches”
            Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs: “Buenos días Ezequiel Perez”
        </li>
        <li> Dicha clase debe implementar también el método saludoInformal( $horario ) el cual debe responder
            sin el apellido, iniciando con un “hola” por delante y al finalizar concatenar “que tengas un ...” saludo
            perteneciente al horario .
            Ej. para clase instanciada para Ezequiel Perez, y parámetro 9hs:
            “¡Hola Ezequiel! Que tengas un buen día”
        </li>
    </ol>
    </p>

    <div class="formulario">
        <form action="ejercicio6.php" method="post" enctype="application/x-www-form-urlencoded">
            <label for="consultaAEJ6" class="label">Ingrese un nombre:</label>
            <input type="text" name="consultaAEJ6" class="campo-form" placeholder="Ejemplo: Marcelo"><br>
            <label for="consultaBEJ6" class="label">Ingrese un apellido:</label>
            <input type="text" name="consultaBEJ6" class="campo-form" placeholder="Ejemplo: Diaz"><br>
            <label for="consultaCEJ6" class="label">Ingrese el un horario (00 a 24):</label>
            <input type="number" name="consultaCEJ6" class="campo-form" placeholder="Ejemplo: 11"><br>
            <button type="submit" class="boton-envio" name="Enviar6">ENVIAR</button>

        </form>
    </div>

    <?php
    require_once "ejercicio6.php";

    if (isset($_POST["Enviar6"])) {
        $nombre = $_POST["consultaAEJ6"];
        $apellido = $_POST["consultaBEJ6"];
        $hora = $_POST["consultaCEJ6"];

        $persona = new Saludar($nombre, $apellido);
        echo "<b>RESULTADO:</b>";
        echo $persona->saludoFormal($hora) . $persona->nombreApellido();
        echo "<br>";
        echo $persona->saludoInformal($hora);
    }
    ?>
</div>
</body>

</html>

<!-- DESARROLLO DE LAS FUNCIONES DEL EJECICIO-->
<?php
class Saludar{
    private $nombre='';
    private $apellido='';

    public function __construct($nombre,$apellido){
        $this->nombre=$nombre;
        $this->apellido=$apellido;

    }
public function saludoFormal($horario)
{

    if ($horario >= 05 && $horario <= 13) {
        return "Buenos dias";

    } elseif ($horario >= 13 && $horario <= 21) {
        return "Buenas tardes";
    } else {
        return "Buenas noches";
    }
}
public function nombreApellido(){
    return " ". $this->nombre ." ". $this->apellido;
    }

public function saludoInformal($horario){
    if ($horario >= 05 && $horario <= 13) {
        return "¡Hola " . $this->nombre . "! " . "Que tengas un buen dia.";

    } elseif ($horario >= 13 && $horario <= 21) {
        return "¡Hola " . $this->nombre . "! " . "Que tengas una buena tarde.";
    } else {
        return  "¡Hola " . $this->nombre . "! " . "Que tengas una buena noche.";

    }

}
}
?>