<!DOCTYPE html>
<html lang="en">
<?php

$fileJS = ["user"];
$fileCSS = ["loginUser","global"];

require_once("./public/include/html_head.php");
?>

<body>

    <div class="container flex row vh-100 vw-100">
        <div class="w-50 flex bg-white" >
            <div class="flex flex-wrap column w-100 h-100 justify-content-center align-content-center">
                <div class="flex h-40 w-100 justify-content-center align-items-end">
                    <div class="container-logo">
                        <img src="./public/img/logos/logo-black-plain.png" alt="Logo-InicioSesión">
                    </div>
                </div>    
                <div class="flex h-60 w-100 ">
                    <form class="flex w-100 column gap-2 justify-content-start pt-p5 formUser" id="formUser">
                        <div class="flex w-60 column mh-p20 gap-1">
                            <label for="" class="form-label">Usuario</label>
                            <input type="text" class="form-control input-login" id="userNameUser" placeholder="Usuario">
                        </div>
                        <div class="flex w-60 column mh-p20 gap-1">
                            <label for="" class="form-label">Contraseña</label>
                            <input type="password" class="form-control input-login" id="passwordUser" placeholder="Contraseña">
                        </div>
                        <button class="mh-p20 mt-1 p-1-2 bg-primary c-white border-none" type="submit" class="">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="w-50 bg-primary ">
            <div class="flex w-100 h-100 justify-content-center align-items-center">
                <img class="h-50" src="./public/img/iniciar-sesion.png" alt="Logo-InicioSesión">
            </div>
        </div>
    </div>


</body>
</html>