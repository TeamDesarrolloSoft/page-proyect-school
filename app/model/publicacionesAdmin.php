<?php
class ModelpublicacionesAdmin{

    public static function add($columns, $params, $values){

        [ $err, $res ] =  Db::query("INSERT INTO publicacionesadmin ({$columns}) VALUES ({$params})", $values); 

        if($err) {
            return $err;
        } 

        return $res->affected_rows > 0;
        
    }
}
