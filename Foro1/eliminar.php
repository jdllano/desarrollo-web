<?php 

if (!empty($_GET["id"])) {
    $id=$_GET["id"];
    $sql= $conexion->query(" DELETE FROM usuarios where cedula=$id");
    if ($sql==1) {
        echo "<div  class='alert alert-success'> Usuario eliminado correctamente </div>";
    } else {
        echo "<div> No se ha eliminado al usuario </div>";
    }
}
?>