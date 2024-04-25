<?php
// Trayendo todo del archivo person:
require_once '../controller/prueba.php';

// Trayendo todo lo que está en el modelo:
require_once '../model/prueba.php';
require_once '../db/db.php';

// Verifica si se ha recibido una solicitud POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['nombre']) && isset($_POST['rolAdmin']) && isset($_POST['fecha']) && isset($_FILES['imagen']) && isset($_POST['tituloPubli']) && isset($_POST['descripcion'])) {
        // Obtiene los datos del formulario


        // Puedes hacer lo que necesites con los datos recibidos, como guardarlos en una base de datos, manipular la imagen, etc.

        // Por ejemplo, para guardar la imagen en el servidor
        $target_dir = __DIR__ . '/../uploads/';
        $target_file = $target_dir . basename($imagen["name"]);
        move_uploaded_file($imagen["tmp_name"], $target_file);

        echo json_encode(ControllerPrueba::add());

    } else {
        // Si no se reciben todos los datos esperados, muestra un mensaje de error
        echo "Error: No se recibieron todos los datos esperados.";
    }
    // echo json_encode($_POST);
} else {
    // Si no se recibe una solicitud POST, muestra un mensaje de error
    echo "Error: Se esperaba una solicitud POST.";
}
