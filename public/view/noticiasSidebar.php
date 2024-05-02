<!DOCTYPE html>
<html lang="en">
<head>
<?php
$fileJS = [];
$fileCSS = ["infoNoticiasSidebar", "sidebar"];

require_once("./public/include/html_head.php");
?>
</head>

<body>
<?php require_once("./public/view/sidebar.php");?>

    <main>
        <h1>Noticias:</h1>
        <hr>

        <div class="contNoticiasDatos" style="margin-top: 40px;">
            <div class="contNoticiasHijo">
                <div class="contImgNoticas">
                    <img src="./public/img/alumnosPremiados.jpg">
                </div>

                <div class="contInformacionNoticias" style="padding: 10px;">
                    <p>24 min.</p>
                    <p>Alumnos premiados por excelencia académica.</p>
                </div>
            </div>

            <div class="contNoticiasHijo">
                <div class="contImgNoticas">
                    <img src="./public/img/alumnosBecas.jpeg">
                </div>

                <div class="contInformacionNoticias" style="padding: 10px;">
                    <p>24 min.</p>
                    <p>Alumnos obtienen becas por sus buenas notas.</p>
                </div>
            </div>


            <div class="contNoticiasHijo">
                <div class="contImgNoticas">
                    <img src="./public/img/alumnosFelicitaciones.jpeg">
                </div>

                <div class="contInformacionNoticias" style="padding: 10px;">
                    <p>24 min.</p>
                    <p>Alumnos son felicitados por tener una asistencia continua.</p>
                </div>
            </div>
        </div>

    </main>


</body>

</html>