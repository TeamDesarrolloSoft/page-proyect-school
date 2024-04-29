<!DOCTYPE html>
<html lang="en">
<?php

$fileJS = ["user"];

require_once("./public/include/html_head.php");
?>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <h1>Secccion en donde el usuario se debe de loguear</h1>
                <form id="formUser">
                    <div class="mb-3">
                        <label for="" class="form-label">User</label>
                        <input type="text" class="form-control" id="userNameUser">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control" id="passwordUser">
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <a href="http://localhost/crudRoles" class="btn btn-info">Volver</a>
                    
                </form>
            </div>
        </div>
    </div>


</body>
</html>