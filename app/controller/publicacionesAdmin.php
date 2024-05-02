<?php
class ControllerpublicacionesAdmin{
    public static function add(){
        // Obtener datos enviados por POST
        $postData = $_POST;
        $fileData = $_FILES;

        // Obtener el nombre del archivo
        $fileName = $fileData['imgPublicacionAdmin']['name']; //cambiar el img por el nombre de ecentos

        // Agregar el nombre del archivo al array de datos
        $postData['imgPublicacionAdmin'] = $fileName; //cambiar el img por evento

        // Obtener columnas y parámetros
        $columns = implode(', ', array_keys($postData));
        $params = implode(', ', array_fill(0, count($postData), '?'));

        // Crear un array de valores que incluya los valores de $postData
        $values = array_values($postData);

        // Llamar al método add del modelo
        return ModelpublicacionesAdmin::add($columns, $params, $values); 
    }



    public static function mostrarPublicacionesAdmin(){
        return ModelpublicacionesAdmin::mostrarPublicacionesAdmin();
    }

    public static function eliminandoPublicacion(){
       $id = isset($_GET['id']) ? $_GET['id'] : null;
       return ModelpublicacionesAdmin::eliminandoPublicacion($id);
    }

}
