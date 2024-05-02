<?php
    // $title  = isset($title) ? $title : 'Document';
    /*Si hay archivos css y js damelos, sino hay entonces coloca un arreglo vacio*/
    $fileCSS = isset($fileCSS) ? $fileCSS : []; 
    $fileJS = isset($fileJS) ? $fileJS : []; 
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:: Trabajo ::.</title>


     <!-- Css de la nube, osea cdn: -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <!-- Si hay valores en $fileCSS, lo recorrera y colocara cada valor en un en enlace de abajo -->
    <?php foreach($fileCSS as $key => $filename) :?>
        <link rel="stylesheet" href="../css/<?= str_replace(".", "/", $filename) ;?>.css">
    <?php endforeach ?>


    
    <!-- JS NUBE -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
    <!-- js local -->
    <?php foreach($fileJS as $key => $filename) :?>
        <!-- Al colocarlo como module, puedes importar funciones y clases en otros archivos -->
        <script defer type="module" src="../js/<?= str_replace(".", "/", $filename);?>.js"></script>
    <?php endforeach ?>


</head>






    
 

