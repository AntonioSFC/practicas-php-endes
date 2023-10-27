<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];

if($num1>$num2 && $num1>$num3) {
    echo"El mayor es $num1"; // número 1
} else if ($num2>$num1 && $num2>$num3) {
    echo"El mayor es $num2"; // número 2
} else if($num3>$num2 && $num3>$num1) {
    echo"El mayor es $num3"; // número 3
} else if($num1==$num3 && $num1> $num2) {
    echo"El mayor es $num1"; // números 1 y 3 iguales
} else if($num1==$num2 && $num1> $num3) {
    echo"El mayor es $num1";// números 1 y 2 iguales
} else if($num3==$num2 && $num3> $num1) {
    echo"El mayor es $num3"; // números 2 y 3 iguales
} else {
    echo"Todos los numeros son iguales.";
}
?>
