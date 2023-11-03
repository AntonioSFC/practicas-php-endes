<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        $suma = 0;
        for ($i = 1; $i <= $numero; $i++) {
            $suma += $i;
        }

        echo "<h2>La suma acumulativa de los números del 1 al $numero es: $suma</h2>";
    }
    ?>
