<?php 
require'conexion.php';
$sql = "SELECT * FROM personas;

$result=mysqli_query($conexion, $sql);
while($mostrar= mysqli_fetch_array($result)){
         echo $mostrar ['cedula'];
         echo $mostrar ['nombres'];
         echo $mostrar ['correo'];
         echo $mostrar ['telefono'];
         echo $mostrar ['rol'];
         echo $mostrar ['fecha_registro'];
}
?>