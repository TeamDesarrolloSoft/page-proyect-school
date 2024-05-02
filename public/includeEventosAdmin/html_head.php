<?php
    // $title  = isset($title) ? $title : 'Document';
    /*Si hay archivos css y js damelos, sino hay entonces coloca un arreglo vacio*/
    $fileCSS = isset($fileCSS) ? $fileCSS : []; 
    $fileJS = isset($fileJS) ? $fileJS : []; 
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: Pepito Perez ::.</title>
    <link rel="icon" href="./public/img/logos/icono.png" type="image/x-icon">


     <!-- Css de la nube, osea cdn: -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    

    <!-- Si hay valores en $fileCSS, lo recorrera y colocara cada valor en un en enlace de abajo -->
    <?php foreach($fileCSS as $key => $filename) :?>
        <link rel="stylesheet" href="../css/<?= str_replace(".", "/", $filename) ;?>.css">
    <?php endforeach ?>


    
    <!-- JS NUBE -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
    <!-- js local -->
    <?php foreach($fileJS as $key => $filename) :?>
        <!-- Al colocarlo como module, puedes importar funciones y clases en otros archivos -->
        <script defer type="module" src="../js/<?= str_replace(".", "/", $filename);?>.js"></script>
    <?php endforeach ?>


</head>






    
 

