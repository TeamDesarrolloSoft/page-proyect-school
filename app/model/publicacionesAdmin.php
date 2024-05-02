<?php

class ModelpublicacionesAdmin{

    public static function add($columns, $params, $values){

        [ $err, $res ] =  Db::query("INSERT INTO publicacionesadmin ({$columns}) VALUES ({$params})", $values); 

        if($err) {
            return $err;
        } 

        return $res->rowCount() > 0; // Cambiado affected_rows a rowCount para PDO
        
    }


    public static function mostrarPublicacionesAdmin(){

        [ $err, $res ] =  Db::query("SELECT * FROM publicacionesadmin"); 

        if($err) {
            return [];
        } 

        return $res->fetchAll(PDO::FETCH_ASSOC); // Cambiado get_result()->fetch_all(MYSQLI_ASSOC) a fetchAll(PDO::FETCH_ASSOC)
        
    }


    public static function eliminandoPublicacion($id){

        [ $err, $res ] =  Db::query("DELETE FROM publicacionesadmin where id = ?",[$id]); 

        if($err) {
            return false;
        } 

        return $res->rowCount() > 0; // Cambiado affected_rows a rowCount para PDO
        
    }
}
