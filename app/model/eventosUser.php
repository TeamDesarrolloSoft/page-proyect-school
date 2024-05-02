<?php

class ModeleventosUser{

    public static function mostrarEventosUser(){

        [ $err, $res ] =  Db::query("SELECT * FROM eventosadmin"); 

        if($err) {
            return [];
        } 

        return $res->fetchAll(PDO::FETCH_ASSOC); // Cambiado get_result()->fetch_all(MYSQLI_ASSOC) a fetchAll(PDO::FETCH_ASSOC)
    }

}