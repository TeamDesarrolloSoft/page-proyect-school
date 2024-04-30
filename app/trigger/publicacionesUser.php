<?php
    require_once '../../config/db.php';
    require_once '../controller/publicacionesUser.php';
    require_once '../model/publicacionesUser.php';

    require_once '../db/db.php';


    $action = isset($_GET['action']) ? $_GET['action'] : null;


    if($action == 'GET'){
        echo json_encode(ControllerpublicacionesUser::mostrarPublicacionesUser());
    }


    