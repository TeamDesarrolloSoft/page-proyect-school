<?php
class ModelLogueo{
    public static function login($Data = []) {


        [ $err, $res ] =  Db::query('SELECT * FROM creacionrol WHERE usuario = ?', [ $Data['userAdmin'] ]); 

        if( $err ) {
            return null;
        }

        return $res->get_result()->fetch_assoc();

    }


    public static function rolBack($Data = []) {
        $rol =  Db::query('SELECT id_cargo FROM creacionrol WHERE usuario = ?', [ $Data['userAdmin'] ]); 
        return $rol;

    }
}

