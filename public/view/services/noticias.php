<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/infoNoticias.css">
    <link rel="stylesheet" href="../../css/sidebar.css">
    <title>No me sale</title>
</head>

<body>
    <?php require_once ("../utils/sidebar.php"); ?>






    <main>
        <h1>Noticias:</h1>
        <hr>

        <div class="contNoticiasDatos" style="margin-top: 40px;">
            <div class="contNoticiasHijo">
                <div class="contImgNoticas">
                    <img src="../../img/alumnosPremiados.jpg">
                </div>

                <div class="contInformacionNoticias" style="padding: 10px;">
                    <p>24 min.</p>
                    <p>Alumnos premiados por excelencia académica.</p>
                </div>
            </div>

            <div class="contNoticiasHijo">
                <div class="contImgNoticas">
                    <img src="../../img/alumnosBecas.jpeg">
                </div>

                <div class="contInformacionNoticias" style="padding: 10px;">
                    <p>24 min.</p>
                    <p>Alumnos obtienen becas por sus buenas notas.</p>
                </div>
            </div>


            <div class="contNoticiasHijo">
                <div class="contImgNoticas">
                    <img src="../../img/alumnosFelicitaciones.jpeg">
                </div>

                <div class="contInformacionNoticias" style="padding: 10px;">
                    <p>24 min.</p>
                    <p>Alumnos son felicitados por tener una asistencia continua.</p>
                </div>
            </div>
        </div>

    </main>



    <!-- JS NUBE -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="../../js/sidebar.js"></script>


</body>

</html>