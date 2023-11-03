<?php
    if (isset($_POST['numero'])) {
        $numero = $_POST['numero'];

        if ($numero >= 1 && $numero <= 10) {
            echo "<h2>Tabla de multiplicar del $numero</h2>";
            echo "<table border='1'>";
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $numero * $i;
                echo "<tr><td>$numero x $i</td><td>=</td><td>$resultado</td></tr>";
            }
            echo "</table>";
        } else {
            echo "Por favor, ingrese un número entre 1 y 10.";
        }
    } else {
        echo "Por favor, ingrese un número válido.";
    }
    ?>
