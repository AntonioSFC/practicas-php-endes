<?php
    if(isset($_POST['numero'])) {
        $numero = $_POST["numero"];
        $dias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];

        if ($numero >= 1 && $numero <= 7) {
            $dia = $dias[$numero - 1];
            echo "El día correspondiente al número $numero es: $dia";
        } else {
            echo "Número fuera de rango. Ingresa un número del 1 al 7.";
        }
    }
?>
