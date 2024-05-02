<!DOCTYPE html>
<html lang="en">
<head>
<?php
$fileJS = ["noticiaUser", "sidebar"];
$fileCSS = ["infoNoticiasSidebar", "sidebar"];

require_once("./public/include/html_head.php");
?>
</head>

<body>
<?php require_once("./public/view/sidebar.php");?>

    <main>
        <h1>Noticias:</h1>
        <hr>

        <div class="public_noticias_data">

        </div>

    </main>


</body>

</html>