<?php
    
    echo "<h1>"."hola mundo PHP"."</h1>"."<br>";
    echo "<h2>"."Variables"."</h2>";
    $nombre = "Jimmy". "<br>";
    $edad = "31"."<br>";
    echo "Mi nombre es: ".$nombre. "  Mi edad es: ".$edad ."</br>";
    echo "<h2>"."Variables  de comparacion "."</h2>"; 
    $num1= 5;
    $num2= 8;
    echo "<h2>"."Estructura de control con IF"."</h2>";
    if($num1 > $num2)
        echo "Numero 1 es mayor";
    else 
        echo "Numero 1 es menor". "<br>" ;
    echo "<h2>"."Opereaciones matematicas"."</h2>";
    echo "La suma es: ". $num1 + $num2. "<br>" ;
    echo "La multiplicación es: ". $num1 *  $num2 . "<br>";
    echo "<h2>"."Estructura de control While"."</h2>";
    $n= 1;
    while ($n < 5) {
        echo "Hoy el lunes"."<br>";
        $n++;
    }
    echo "<h2>"."Estructura de control Do - While"."</h2>";
    $n1= 1;
    do {
        echo "Hoy es martes"."<br>";
        $n1++;
    }while ($n1 < 5);
            echo "Hoy el lunes"."<br>";
?>