<?php
// realizar la conexion con la base de datos
require 'conexion.php';
// procesar los datos del formulario 

if ($_SERVER ["REQUEST_METHOD"] = "POST"){
    $cedula = $_POST ["cedula"];
    $nombres = $_POST ["nombres"];
    $correo= $_POST ["correo"];
    $telefono= $_POST ["telefono"];
    $rol= $_POST ["rol"];
    $fecha_registro = $_POST ["fecha_registro"];
}
$sql = "INSERT INTO usuarios (cedula, nombres, correo, telefono, rol, fecha_registro) VALUES ('$cedula', '$nombres', '$correo', '$telefono', '$rol', '$fecha_registro')";
if(mysqli_query($conexion, $sql)){
    echo "Usuario creado";
    
}
else{
    echo "Error". mysqli_connect_error ();
}
mysqli_close($conexion) ;
?>