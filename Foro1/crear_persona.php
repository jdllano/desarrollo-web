<?php
// realizar la conexion con la base de datos
include 'conexion.php';
// procesar los datos del formulario 
if (!empty($_POST['btn_enviar'])){

    if (!empty($_POST['cedula']) and !empty($_POST['nombres']) and !empty($_POST['correo']) and !empty($_POST['telefono']) and !empty($_POST['rol'] ) and !empty($_POST['fecha_registro'] ) )
  
    $cedula = $_POST ["cedula"];
    $nombres = $_POST ["nombres"];
    $correo= $_POST ["correo"];
    $telefono= $_POST ["telefono"];
    $rol= $_POST ["rol"];
    $fecha_registro = $_POST ["fecha_registro"];

    $sql= $conexion->query("INSERT INTO usuarios (cedula, nombres, correo, telefono, rol, fecha_registro) VALUES ('$cedula', '$nombres', '$correo', '$telefono', '$rol', '$fecha_registro')");
    if ($sql==1) {
        echo '<div class="alert alert-success"> Usuario registrado </div>';
    } else {
        echo '<div class="alert alert-danger"> Fallo en el registro </div>';
    }
    
}

else{
    echo '<div class="alert alert-warning"> Algun campo esta vacio </div>';
    
}

mysqli_close($conexion) ;

?>