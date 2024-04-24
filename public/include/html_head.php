<?php
    $title  = isset($title) ? $title : 'Document';
    /*Si hay archivos css y js damelos, sino hay entonces coloca un arreglo vacio*/
    $fileCSS = isset($fileCSS) ? $fileCSS : []; 
    $fileJS = isset($fileJS) ? $fileJS : []; 
    $v  = '?v=' . time();
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $title?></title>
</head>



    <!-- Css de la nube, osea cdn -->


    
    <!-- CSS LOCAL -->

    <?php foreach($fileCSS as $key => $filename) :?>
    
        <link rel="stylesheet" href="./public/css/<?= str_replace(".", "/", $filename) ;?>.css">

    <?php endforeach ?>


     <!-- JS NUBE -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    
    
    <!-- js local -->
    <?php foreach($fileJS as $key => $filename) :?>
    
        <!-- Al colocarlo como module, puedes importar funciones y clases en otros archivos -->
        <script defer type="module" src="./public/js/<?= str_replace(".", "/", $filename);?>.js"></script>
    
    <?php endforeach ?>


