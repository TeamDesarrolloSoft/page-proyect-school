<?php

class ModelLogueo{
    public static function login($Data = []) {

        [ $err, $res ] =  Db::query('SELECT * FROM creacionrol WHERE usuario = ?', [ $Data['userAdmin'] ]); 

        if( $err ) {
            return null;
        }

        return $res->fetch(PDO::FETCH_ASSOC); // Cambiado get_result()->fetch_assoc() a fetch(PDO::FETCH_ASSOC)

    }

    public static function rolBack($Data = []) {
        $rol =  Db::query('SELECT id_cargo FROM creacionrol WHERE usuario = ?', [ $Data['userAdmin'] ]); 
        return $rol;

    }
}
