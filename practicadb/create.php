<?php
require'conexion.php';
$sql = "INSERT INTO personas(cedula, nombre, apellido, fecha_nacimiento) VALUES ('1714304576','Jimmy', 'Moreira', '1992-11-03')";

if(mysqli_query($conexion, $sql)){
    echo "Persona creada";
    
}else{
    echo "Error". mysqli_connect_error ();
}
    
?>
