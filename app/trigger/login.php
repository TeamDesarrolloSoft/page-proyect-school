<?php

    require_once '../../config/db.php';

    require_once '../controller/login.php';
    require_once '../model/login.php';

    require_once '../db/db.php';


    $action = isset($_GET['action']) ? $_GET['action'] : null;


    if($action == "verifyCreacionRoles"){
        echo json_encode(ControllerLogin::add());
        // echo json_encode($_POST);
    }else if ($action == "verifyAdmin") {
        $dataRol = ControllerLogin::identifyAdmin_Rol();
        /*Se debe de colcoar en $dataRol !==null, para verificar que la variable TENGA UN VALOR
        ASIGNADO y que no tenga ninguna, tambien debemos de verificar si se estan enviado
        datos usando isset() y por ultimo si el id_cargo es 1, esto hace enfasis que es un admin*/

        if ($dataRol !== null && isset($dataRol['id_cargo']) && $dataRol['id_cargo'] == 1) {
            echo json_encode(["status" => true]);
        } else {
            echo json_encode(["status" => false]);
        }
    }else if($action == 'verifyUser'){
        $dataRol = ControllerLogin::identifyAdmin_Rol();
        if ($dataRol !== null && isset($dataRol['id_cargo']) && $dataRol['id_cargo'] == 2) {
            echo json_encode(["status" => true]);
        } else {
            echo json_encode(["status" => false]);
        }

    }
 