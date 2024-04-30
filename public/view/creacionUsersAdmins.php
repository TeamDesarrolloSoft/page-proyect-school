<!DOCTYPE html>
<html lang="en">
<?php

$fileJS = ["app"];

require_once("../includeCreacionAdmin_Users/html_head.php");
?>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <h1>Creacion en donde el admin crea mas admins y usuarios</h1>
                <form id="form">
                    <div class="mb-3">
                        <label for="" class="form-label">User</label>
                        <input type="text" class="form-control" id="user">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                    </div>

                    <div class="mb-3">
                        <label for="">Selecciona una rol:</label>

                        <select id="rol" class="form-control">
                            <option value="1">Administrador</option>
                            <option value="2">Usuario</option>
                        </select>
                    </div>


                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <a href="./admin.php" class="btn btn-success">Login admin</a>
                </form>
            </div>
        </div>
    </div>


</body>
</html>