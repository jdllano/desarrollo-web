<?php
require 'conexion.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <figure class="text-center">
        <blockquote class="blockquote">
            <h1>FORMULARIO USUARIOS</h1>
        </blockquote>
        <figcaption class="blockquote-footer">
            By <cite title="Source Title">Jimmy Llano</cite>
        </figcaption>
    </figure>
    <div class= "container-fluid row">
        <form class="col-4 p-3" action="crear_persona.php" method="post">
            <h3 class= "text-center text-secondary">REGISTRO DE USUARIOS</h3>
            <div class="mb-3" >
                <label for="cedula" class="form-label">Cedula</label>
                <input type="text" class="form-control"  name="cedula" id="cedula" name="cedula" required >
            </div>
            <div class="mb-3" >
                <label for="nombres" class="form-label">Nombres</label>
                <input type="text" class="form-control" name="nombres" id="nombres"   required>
            </div>
            <div class="mb-3" >
                <label for="correo" class="form-label">Correo</label>
                <input type="email" class="form-control" name="correo" id="correo"   required>
            </div>
            <div class="mb-3" >
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" name="telefono" id="telefono"  required>
            </div>
            <div class="mb-3" >
                <label for="rol" class="form-label">Rol</label>
                <select class="form-select" aria-label="Default select example" name="rol" id="rol" required>
                    <option value="administrador">Administrador</option>
                    <option value="supervisor">Supervisor</option>
                    <option value="usuario">usuario</option>
                </select>
            </div>
            <div class="mb-3" >
                <label for="fecha_registro" class="form-label">Fecha de Registro</label>
                <input type="datetime-local" name="fecha_registro" id="fecha_registro"required class="form-control">
            </div>
            <button type="submit" class="btn btn-primary" value= "ok">Enviar</button>
        </form>     
    
        <div class= "col-8 p-4">
            <table class="table">
                <thead class="table-dark text-center">
                <tr>
                    <th scope="col">Cédula</th>
                    <th scope="col" >Nombres</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Fecha de registro</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                    
                </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * from usuarios";
                    $result= mysqli_query($conexion, $sql);
                    while ($mostrar = mysqli_fetch_array($result)){
                    ?>
                    <tr >
                        <td><?php echo  $mostrar['cedula'] ?></td>
                        <td><?php echo  $mostrar['nombres'] ?></td>
                        <td><?php echo  $mostrar['correo'] ?></td>
                        <td><?php echo  $mostrar['telefono'] ?></td>
                        <td><?php echo  $mostrar['rol'] ?></td>
                        <td><?php echo  $mostrar['fecha_registro'] ?></td>
                        <td><button type="button" class=" align-center badge text-bg-warning btn btn-warning">Editar</button></td>
                        <td><button type="button" class="badge text-bg-danger btn btn-danger">Eliminar</button></td>
                        
                    </tr>
                    <?php
                    }     
                    ?>
                </tbody>
            </table>
        </div> 
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>