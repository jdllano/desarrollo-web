<?php
    echo "<h1>". "Funciones PHP" . "</h1>";
    function saludo() {
        echo "<h2>". "Saludo" . "</h2>";
        echo date('y-m-d');
    }
    function saludar($nombre, $apellido) {
        echo "<h2>". "Saludo" . "</h2>";
        echo "<h3>". "Mi nombre es: " .$nombre ." ". $apellido. "</h3>";
        echo date('y-m-d');
    }
    function suma($num1, $num2) {
        echo "<h2>". "La suma es" . "</h2>";
        $r = $num1 + $num2;
        echo "<h3>".$r. "</h3>";
        
    }
    echo saludo ();
    echo saludar ("Mateo", "Luzuriaga");
    echo saludar ("Jimmy", "Ramirez"); 
    echo saludar ("Jimmy", "Llano");
    echo suma ( 2, 6);
    $a= 5;
    $b= 8;
    echo suma($a , $b);
?>