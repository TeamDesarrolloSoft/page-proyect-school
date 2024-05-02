<?php
class Db {
    private static $instancia = false;
    private static $conexion = null;

    private static function conexion () {
        try {
            self::$conexion = new PDO("mysql:host=" . HOST . ";dbname=" . DB, NAME, PASS);
            self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error en la conexión: " . $e->getMessage());
        }
    }

    public static function query($query, $params = []) {
        if (self::$instancia == false) {
            self::$instancia = true;
            self::conexion();
        }

        try {
            $stmt = self::$conexion->prepare($query);

            if (count($params)) {
                foreach ($params as $key => &$value) {
                    $stmt->bindParam($key + 1, $value);
                }
            }

            if ($stmt->execute()) {
                return [null, $stmt];
            }
        } catch (PDOException $e) {
            return [$e->getMessage(), null];
        }
    }
}
?>