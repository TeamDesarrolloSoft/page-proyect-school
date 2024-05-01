<!DOCTYPE html>
<html lang="en">
<?php

//AQUI PUEDES COLOCAR EL NOMBRE DE TU ARCHIVO CSS O JS, OJO SOLO EL NOMBRE DEL ARCHIVO
//YA QUE EN "INCLUDEADMIN" AUTOMATICAMENTE TE CARGA ESOS ARCHIVOS
$fileJS = ["admin"];
$fileCSS = ["loginAdmin","global"];

require_once("../includeLogueoAdmin/html_head.php");
?>
<style>

</style>
<body>

    <div class="container flex row vh-100 vw-100">
        <div class="w-50 flex bg-white">
            <div class="flex flex-wrap column w-100 h-100 justify-content-center align-content-center">
                <div class="flex h-40 w-100 justify-content-center align-items-end">
                    <div class="container-logo">
                        <img src="../img/logos/logo-black-plain.png" alt="Logo-InicioSesión">
                    </div>
                </div>
                <div class="flex h-60 w-100 ">   
                    <form class="flex w-100 column gap-2 justify-content-start pt-p5 formAdmin" id="formAdmin">
                        <div class="flex w-60 column mh-p20 gap-1">
                            <label for="" class="form-label">Administrador</label>
                            <input type="text" class="input-login-admin form-control" id="userAdmin" placeholder="Administrador">
                        </div>
                        <div class="flex w-60 column mh-p20 gap-1">
                            <label for="" class="form-label">Contraseña</label>
                            <input type="password" class="input-login-admin form-control" id="passwordAdmin" placeholder="Contraseña">
                        </div>

                        <button type="submit" class="mh-p20 mt-1 p-1-2 bg-primary c-white border-none">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="w-50 bg-primary ">
            <div class="flex w-100 h-100 justify-content-center align-items-center">
                <img class="h-50" src="../img/iniciar-sesion.png" alt="Logo-InicioSesión">
            </div>
        </div>
    </div>
</body>
</html>