<?php
    require_once '../../config/db.php';
    require_once '../controller/publicacionesAdmin.php';
    require_once '../model/publicacionesAdmin.php';

    require_once '../db/db.php';



    $action = isset($_GET['action']) ? $_GET['action'] : null;


    if($action == "add"){
        $file = $_FILES['imgPublicacionAdmin'];
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
    
        // Directorio donde se guardara los archivos
        $uploadDirectory = 'C:\xampp\htdocs\page-proyect-school\app\uploads\\';

        // Mueve el archivo al directorio de destino
        $destination = $uploadDirectory . $fileName;

        if(move_uploaded_file($fileTmpName, $destination)){
            echo json_encode(ControllerpublicacionesAdmin::add());
            // echo json_encode(["Post" => $_POST, "Files" => $_FILES]);
        }else{
            echo json_encode(["status" => false, "Description" => "No se pudo insertar en el directorio"]);
        }

        // echo json_encode(ControllerLogin::add());
    }else if($action == "GET"){
        echo json_encode(ControllerpublicacionesAdmin::mostrarPublicacionesAdmin());
    }else if($action == "DELETE"){
        echo json_encode(ControllerpublicacionesAdmin::eliminandoPublicacion());
    }else if ($action == "UPDATE"){
        echo json_encode(ControllerpublicacionesAdmin::EditarPubliciones());
    }




