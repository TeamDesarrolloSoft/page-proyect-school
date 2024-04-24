<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/infoData.css">
    <link rel="stylesheet" href="../../css/sidebar.css">
    <title>No me sale</title>
</head>


<body>
    <?php require_once ("../utils/sidebar.php"); ?>


    <main>

        <h1>Perfil:</h1>
        <hr>
        <div class="contPerfilEstudent">
            <div class="contCirculoImg">
                <img src="../../img/person.png" alt="">
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



    <!-- JS NUBE -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../../js/sidebar.js"></script>



</body>

</html>