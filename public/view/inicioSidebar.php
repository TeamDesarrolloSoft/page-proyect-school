<!DOCTYPE html>
<html lang="en">
<?php
$fileJS = ["sidebar"];
$fileCSS = ["inicioSidebar", "sidebar"];

require_once("./public/include/html_head.php");

?>
</head>

<body>
    <?php require_once("./public/view/sidebar.php");?>


    <main>
        <h2 class="info">Información</h2>

        <div class="container">

            <div class="content">
                <div class="cards">

                    <div class="card">
                        <div class="icon-case">
                            <img src="./public/img/EstudiantesDocentes.png" alt="estudiantes">
                            <span>Estudiantes</span>

                        </div>
                        <div class="box">
                            <h1>243</h1>
                        </div>
                    </div>

                    <div class="card">
                        <div class="icon-case">
                            <img src="./public/img/Cursos.png" alt="crusos">
                            <span>Cursos</span>

                        </div>
                        <div class="box">
                            <h1>23</h1>
                        </div>

                    </div>

                    <div class="card">
                        <div class="icon-case">
                            <img src="./public/img/EstudiantesDocentes.png" alt="docente">
                            <span>Docentes</span>

                        </div>
                        <div class="box">
                            <h1>30</h1>
                        </div>

                    </div>

                    <div class="card">
                        <div class="icon-case">
                            <img src="./public/img/Usuario.png" alt="usuario">
                            <span>Usuarios</span>

                        </div>
                        <div class="box">
                            <h1>273</h1>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="lema-container">

            <span> Lema 2024: "La libertad implica responsabilidad." (George Bernard Show)</span>

        </div>

        <h2 class="video">Videos</h2>


        <div class="conteiner-videos">

            <div class="carrusel-videos">
                <div class="list-videos">
                    <div class="video-card">
                        <!-- Contenido de la primera tarjeta -->
                        <div class="img-sn-1">
                            <div class="img_small">
                                <img src="./public/img/video_sn.png" alt="video1">
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="reclamoss">
            <img src="./public/img/reclamos_beibe.png" alt="">
            <h3 class="reclamos">Libro de Reclamaciones</h3>

        </div>

    </main>




</body>

</html>