<?php 
include "conexion.php";
$id=$_GET['id'];
$sql= $conexion->query("SELECT * FROM usuarios where cedula = $id ");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<form class="col-3 p-3 m-auto"  method="post">
                        
                        <h3 class= "text-center text-secondary">EDITAR USUARIO</h3>
                        <input type="hidden" name="id" value="<?=$_GET["id"] ?>">
                            <?php
                            include "editar_persona.php";
                            while($datos= $sql->fetch_object()){ ?>
                        <div class="mb-3" >
                            <label for="nombres" class="form-label">Nombres</label>
                            <input type="text" class="form-control" name="nombres" id="nombres " value="<?=$datos->nombres?>">
                        </div>
                        <div class="mb-3" >
                            <label for="correo" class="form-label">Correo</label>
                            <input type="email" class="form-control" name="correo" id="correo" value="<?=$datos->correo?>">
                        </div>
                        <div class="mb-3" >
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" name="telefono" id="telefono" value="<?=$datos->telefono?>">
                        </div>
                        <div class="mb-3" >
                            <label for="rol" class="form-label">Rol</label>
                            <select class="form-select" aria-label="Default select example" name="rol" id="rol" value="<?=$datos->rol?>">
                                <option value="administrador">Administrador</option>
                                <option value="supervisor">Supervisor</option>
                                <option value="usuario">usuario</option>
                            </select>
                        </div>
                        <div class="mb-3" >
                            <label for="fecha_registro" class="form-label">Fecha de Registro</label>
                            <input type="datetime-local" name="fecha_registro" id="fecha_registro"required class="form-control" value="<?=$datos->fecha_registro?>">
                        </div> 
                        <?php

                            }
                        ?>
                        
                        <button type="submit" class="btn btn-primary" name="btn_editar" value= "ok">Editar</button>
                    </form>     
</body>
</html>