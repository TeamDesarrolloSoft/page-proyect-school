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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- CSS LOCAL -->

    <?php foreach($fileCSS as $key => $filename) :?>
    
        <link rel="stylesheet" href="./public/css/<?= str_replace(".", "/", $filename) ;?>.css">

    <?php endforeach ?>


     <!-- JS NUBE -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    
    
    <!-- js local -->
    <?php foreach($fileJS as $key => $filename) :?>
    
        <!-- Al colocarlo como module, puedes importar funciones y clases en otros archivos -->
        <script defer type="module" src="public/js/<?= str_replace(".", "/", $filename);?>.js"></script>
    <?php endforeach ?>


