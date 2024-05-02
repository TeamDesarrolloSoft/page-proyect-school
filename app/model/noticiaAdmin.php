<?php
class ModelNoticiaAdmin{

    public static function add($columns, $params, $values){

        [ $err, $res ] =  Db::query("INSERT INTO noticiaadmin ({$columns}) VALUES ({$params})", $values); 

        if($err) {
            return $err;
        } 

        return $res->affected_rows > 0;
        
    }


    public static function mostrarNoticiaAdmin(){

        [ $err, $res ] =  Db::query("SELECT * FROM noticiaadmin"); 

        if($err) {
            return [];
        } 

        return $res->get_result()->fetch_all(MYSQLI_ASSOC);
        
    }


    public static function eliminarNoticiaAdmin($id){

        [ $err, $res ] =  Db::query("DELETE FROM noticiaadmin where id = ?",[$id]); 

        if($err) {
            return false;
        } 

        return $res->affected_rows > 0;
        
    }
}
