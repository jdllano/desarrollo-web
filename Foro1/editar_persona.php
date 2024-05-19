<?php


if (!empty($_POST["btn_editar"])) {
   if (!empty($_POST["nombres"]) and !empty($_POST["correo"]) and !empty($_POST["telefono"]) and !empty($_POST["rol"]) and !empty($_POST["fecha_registro"])) {
    $id=$_POST["id"];
    $nombres = $_POST ["nombres"];
    $correo= $_POST ["correo"];
    $telefono= $_POST ["telefono"];
    $rol= $_POST ["rol"];
    $fecha_registro = $_POST ["fecha_registro"];

    $sql = $conexion->query ("UPDATE usuarios SET nombres='$nombres', correo= '$correo', telefono= '$telefono', rol='$rol', fecha_registro='$fecha_registro' WHERE cedula =$id" );
    if ($sql==1) {
        header("location: formulario.php");
    } else {
        echo "<div class= 'alert alert-warning'> No se actualizo </div>";
    }

    }else{
    echo "<div class= 'alert alert-warning'> Campos Vacios </div>";
    }
}

?>
