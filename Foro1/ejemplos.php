if ($_SERVER ["REQUEST_METHOD"] = "POST"){
    $cedula = $_POST ["cedula"];
    $nombres = $_POST ["nombres"];
    $correo= $_POST ["correo"];
    $telefono= $_POST ["telefono"];
    $rol= $_POST ["rol"];
    $fecha_registro = $_POST ["fecha_registro"];

    $sql = "INSERT INTO usuarios (cedula, nombres, correo, telefono, rol, fecha_registro) VALUES ('$cedula', '$nombres', '$correo', '$telefono', '$rol', '$fecha_registro')";
    if(mysqli_query($conexion, $sql)){
    echo '<div class= "alert alert-success">Usuario creado </div>' ;
    
} else {
    echo '<div class= "alert alert-danger">Error en el registro </div>' ;
}
    
}
else{
    echo '<div class= "alert alert-danger"> Error </div>'. mysqli_connect_error ();
}
$sql = $conexion->query("SELECT * from usuarios") ;