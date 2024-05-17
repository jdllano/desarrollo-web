<?php
// verificar que se haya enviado una fecha de nacimiento
if(isset($_POST ['Fecha_nacimiento'])){
    // obtener fecha de nacimiento del formulario
    $fecha_nacimiento= $_POST ['Fecha_nacimiento'];

    //Funcion para calcular la edad
    Function calcularEdad ($fecha_nacimiento) {
        // convertir la fecha de nacimiento en data time
        $fecha_nacimiento = new DateTime ($fecha_nacimiento);
        $fecha_actual= new DateTime();
        // calcular diferencia de fechas
        $diferencia= $fecha_actual ->diff($fecha_nacimiento);
        // obtener edad en años 
        $edad= $diferencia->y;
        return $edad;
    }
    //llamar a la funcion calcularEdad() para obtener la edad
    $edad = calcularEdad ($fecha_nacimiento);

    echo "<h2>". "TU EDAD". "</h2>";
    echo "<p> Tienes ". $edad. " años </p>";
} else{
    // si no se envia una fecha de nacimiento enviar un mensaje de error
    echo "<h2>". "Error". "</h2>";
    echo "<p> No se ha proporcionado una fecha de nacimiento </p>";
}

?>