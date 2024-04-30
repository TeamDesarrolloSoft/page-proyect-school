<?php

class ModelpublicacionesUser{

    public static function mostrarPublicacionesUser(){

        [ $err, $res ] =  Db::query("SELECT * FROM publicacionesadmin"); 

        if($err) {
            return [];
        } 

        return $res->get_result()->fetch_all(MYSQLI_ASSOC);
        
    }

}
