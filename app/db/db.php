<?php
class Db
{

    private static $instancia = false;
    private static $conexion = null;

    //Metodo principal de la conexion
    private static function conexion()
    {
        //Accedemos al atributo privado de conexion gracias a self y le asignamos
        //la conexion a la base de datos
        self::$conexion = new PDO("sqlsrv:server=SEBAS_LAPTOP;database=BD_COLEGIO;","sebasData", "1234");
    }


    public static function query($query, $params = [])
    {
        if (self::$instancia == false) {
            self::$instancia = true;
            self::conexion();
        }

        try {
            // Preparamos la consulta
            $stmt = self::$conexion->prepare($query);
    
            // Si hay parámetros, los asignamos usando bindParam()
            if (count($params)) {
                // Iteramos sobre los parámetros y los asignamos con bindParam()
                foreach ($params as $key => &$value) {
                    $stmt->bindParam($key + 1, $value); // +1 porque los marcadores de posición comienzan en 1
                }
            }
            if($stmt->execute()){
                return [null, $stmt];
            }

        } catch (\Throwable $e) {
            return [$e->getMessage(), null];
        }
    }




}



// try{
//     $conexion = new PDO();
//     $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Conexión exitosa.";

// }catch(Exception $e){
//     echo "faaaa";
// }


