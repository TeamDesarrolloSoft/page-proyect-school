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

    
    public static function add($columns, $params, $values){
        [ $err, $res ] =  Db::query("INSERT INTO publicaciones ({$columns}) VALUES ({$params})", $values); 

        if($err) {
            return $err;
        } 

        return $res->rowCount() > 0;
        
    }


    
}
