<?php
class ModelPrueba{

    public static function getPrueba(){
        [$error, $res] = Db::query("SELECT * FROM ROLES");

        if($error){
            return [];
        }
        // Devolver los resultados si no hay errores
        return $res->fetchAll(PDO::FETCH_ASSOC);

    }


    
}
