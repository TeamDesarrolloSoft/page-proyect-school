<?php
class ModeleventosAdmin{

    public static function add($columns, $params, $values){

        [ $err, $res ] =  Db::query("INSERT INTO eventosadmin ({$columns}) VALUES ({$params})", $values); 

        if($err) {
            return $err;
        } 

        return $res->affected_rows > 0;
        
    }


    public static function mostrarEventosAdmin(){

        [ $err, $res ] =  Db::query("SELECT * FROM eventosadmin"); 

        if($err) {
            return [];
        } 

        return $res->get_result()->fetch_all(MYSQLI_ASSOC);
        
    }


    public static function eliminandoEventos($id){

        [ $err, $res ] =  Db::query("DELETE FROM eventosadmin where id = ?",[$id]); 

        if($err) {
            return false;
        } 

        return $res->affected_rows > 0;
        
    }
}
