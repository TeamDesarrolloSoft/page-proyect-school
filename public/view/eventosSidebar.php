<!DOCTYPE html>
<html lang="en">
<?php
$fileJS = ["sidebar"];
$fileCSS = ["infoNoticiasSidebar", "sidebar"];

require_once("./public/include/html_head.php");
?>
</head>

<body>
    <?php require_once("./public/view/sidebar.php");?>
    
    <main>
        <h1>Eventos:</h1>
        
        <div class="contNoticiasDatos" style="margin-top: 40px;">
            <div class="contNoticiasHijo">
                <div class="contImgNoticas">
                    <img src="./public/img/nocheTalentos.jpeg">
                </div>
                
                <div class="contInformacionNoticias" style="padding: 10px; overflow-x: auto;">
                    <p>20/04/24</p>
                    <p>Noche de Talentos: Celebrando la Diversidad Artística de Nuestros Estudiantes</p>
                </div>
            </div>

            <div class="contNoticiasHijo">
                <div class="contImgNoticas">
                    <img src="./public/img/voluntarios.jpeg">
                </div>
                
                <div class="contInformacionNoticias" style="padding: 10px; overflow-x: auto;">
                    <p>02/03/24</p>
                    <p>Jornada de Voluntariado: Uniendo Esfuerzos para Mejorar Nuestra Comunidad</p>
                </div>
            </div>


            <div class="contNoticiasHijo">
                <div class="contImgNoticas">
                    <img src="./public/img/diaDeporte.jpeg">
                </div>
                
                <div class="contInformacionNoticias" style="padding: 10px; overflow-x: auto;">
                    <p>16/02/24</p>
                    <p>Taller de Habilidades Sociales: Fortaleciendo la Comunicación y las Relaciones Interpersonales</p>
                </div>
            </div>
        </div>
    </main>


</body>
</html>


