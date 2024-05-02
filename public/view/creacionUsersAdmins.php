<!DOCTYPE html>
<html lang="en">
<?php

$fileJS = ["app"];
$fileCSS = ["app"];

require_once("../includeCreacionAdmin_Users/html_head.php");
?>

<body>

<div class="container">
    <div class="form-wrapper">
        <div class="form-inner">
            <h1>Creacion de Administradores y Usuarios</h1>
            <form id="form" class="registration-form">
                <div class="form-group">
                    <label for="user" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="user">
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password">
                </div>

                <div class="form-group">
                    <label for="rol">Selecciona un rol:</label>
                    <select id="rol" class="form-control">
                        <option value="1">Administrador</option>
                        <option value="2">Usuario</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-submit">Enviar</button>
            </form>
        </div>
    </div>
</div>


</body>
</html>