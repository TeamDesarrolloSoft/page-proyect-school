<?php
class ModelpublicacionesAdmin{

    public static function add($columns, $params, $values){

        [ $err, $res ] =  Db::query("INSERT INTO publicacionesadmin ({$columns}) VALUES ({$params})", $values); 

        if($err) {
            return $err;
        } 

        return $res->affected_rows > 0;
        
    }


    public static function mostrarPublicacionesAdmin(){

        [ $err, $res ] =  Db::query("SELECT * FROM publicacionesadmin"); 

        if($err) {
            return [];
        } 

        return $res->get_result()->fetch_all(MYSQLI_ASSOC);
        
    }


    public static function eliminandoPublicacion($id){

        [ $err, $res ] =  Db::query("DELETE FROM publicacionesadmin where id = ?",[$id]); 

        if($err) {
            return false;
        } 

        return $res->affected_rows > 0;
        
    }
}
