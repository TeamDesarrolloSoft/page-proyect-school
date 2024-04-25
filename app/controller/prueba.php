<?php
class ControllerPrueba
{
    public static function add()
    {
        // Obtenemos los datos del formulario
        $array = $_POST;

        // Convertimos el array asociativo en dos arrays separados para columnas y valores
        $columns = implode(', ', array_keys($array));
        $params = implode(', ', array_fill(0, count($array), '?')); // Creamos los marcadores de posición
        $values = array_values($array);

        // Pasamos los datos al método add del modelo para que se inserten en la base de datos
        return ModelPrueba::add($columns, $params, $values);
    }
}
?>
