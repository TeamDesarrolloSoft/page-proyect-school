<?php

class ModeleventosUser{

    public static function mostrarEventosUser(){

        [ $err, $res ] =  Db::query("SELECT * FROM eventosadmin"); 

        if($err) {
            return [];
        } 

        return $res->get_result()->fetch_all(MYSQLI_ASSOC);
        
    }

}
