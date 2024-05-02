<!DOCTYPE html>
<html lang="en">
<?php
$fileJS = [];
$fileCSS = ["infoNoticiasSidebar", "sidebar"];

require_once("./public/include/html_head.php");

?>

<body>
    <?php require_once("./public/view/sidebar.php"); ?>

    <main>
        <h1>Eventos</h1>
        <hr>
        <div class="public_eventos_data">

        </div>
    </main>


</body>

</html>