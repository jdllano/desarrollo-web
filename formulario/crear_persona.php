<?php
// realizar la conexion con la base de datos
require 'conexion.php';
// procesar los datos del formulario 

if ($_SERVER ["REQUEST_METHOD"] = "POST"){
    $cedula = $_POST ["cedula"];
    $nombre = $_POST ["nombre"];
    $apellido = $_POST ["apellido"];
    $fecha_nacimiento = $_POST ["fecha_nacimiento"];
}
$sql = "INSERT INTO personas(cedula, nombre, apellido, fecha_nacimiento) VALUES ('$cedula', '$nombre', '$apellido', '$fecha_nacimiento')";
if(mysqli_query($conexion, $sql)){
    echo "Persona creada";
    
}
else{
    echo "Error". mysqli_connect_error ();
}
mysqli_close($conexion) ;
?>