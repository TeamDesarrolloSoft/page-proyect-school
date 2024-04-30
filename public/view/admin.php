<!DOCTYPE html>
<html lang="en">
<?php

//AQUI PUEDES COLOCAR EL NOMBRE DE TU ARCHIVO CSS O JS, OJO SOLO EL NOMBRE DEL ARCHIVO
//YA QUE EN "INCLUDEADMIN" AUTOMATICAMENTE TE CARGA ESOS ARCHIVOS
$fileJS = ["admin"];
$fileCSS = [];

require_once("../includeLogueoAdmin/html_head.php");
?>
<style>

</style>
<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <h1>Secccion en donde el admin debe de registrarse</h1>
                <form id="formAdmin">
                    <div class="mb-3">
                        <label for="" class="form-label">User</label>
                        <input type="text" class="form-control" id="userAdmin">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Password</label>
                        <input type="password" class="form-control" id="passwordAdmin">
                    </div>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <a href="http://localhost/crudRoles/public/view/creacionUsersAdmins.php" class="btn btn-info">Volver</a>
                    
                </form>
            </div>
        </div>
    </div>


</body>
</html>