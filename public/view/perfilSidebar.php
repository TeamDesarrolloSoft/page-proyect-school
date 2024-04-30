<!DOCTYPE html>
<html lang="en">

<head>
<?php
$fileJS = ["sidebar"];
$fileCSS = ["infoPefilSidebar", "sidebar"];

require_once("./public/include/html_head.php");
?>
</head>


<body>
<?php require_once("./public/view/sidebar.php");?>

    <main>

        <h1>Perfil:</h1>
        <hr>
        <div class="contPerfilEstudent">
            <div class="contCirculoImg">
                <img src="./public/img/person.png" alt="">
            </div>

            <div class="contTextCirculo">
                <h2>Pepito Juarez</h2>
                <h3>Administrador</h3>
            </div>
        </div>


        <div class="contenedorInfoEstudents">

            <form action="">
                <form action="">
                    <div class="contPart1">
                        <label for="nombre">Nombres</label>
                        <input type="text" name="nombre" id="nombre">

                        <label for="apellidos">Apellidos</label>
                        <input type="text" name="apellidos" id="apellidos">

                        <label for="fechaNacimiento">Fecha de nacimiento</label>
                        <input type="date" name="fechaNacimiento" id="fechaNacimiento">

                        <label for="nivelEducativo">Nivel educativo</label>
                        <input type="text" name="nivelEducativo" id="nivelEducativo">
                    </div>

                    <div class="contPart2">
                        <label for="Email">Email</label>
                        <input type="text" name="" id="email">

                        <label for="numero">Numero</label>
                        <input type="text" name="" id="numero">

                        <label for="cargo">Cargo</label>
                        <input type="text" name="" id="cargo">
                    </div>
                </form>
            </form>


        </div>

    </main>


    </main>







</body>

</html>