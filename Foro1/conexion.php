<?php
// datos de conexion 
$serverName = 'localhost';
$userName= 'root';
$password = 'Patrullero.61';
$database = 'foro1';

// conexion 
$conexion= mysqli_connect($serverName,$userName,$password,$database);
 
// comprobar 
if(!$conexion){
    die("Conexion Fallida:  " . mysqli_connect_error());
}
else
    "". "<br>";

?>