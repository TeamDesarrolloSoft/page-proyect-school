<?php

class ModelpublicacionesUser{

    public static function mostrarPublicacionesUser(){

        [ $err, $res ] =  Db::query("SELECT * FROM publicacionesadmin"); 

        if($err) {
            return [];
        } 

        return $res->fetchAll(PDO::FETCH_ASSOC); // Cambiado get_result()->fetch_all(MYSQLI_ASSOC) a fetchAll(PDO::FETCH_ASSOC)
        
    }

}
