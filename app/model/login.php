<?php

class ModelLogin{

    public static function add($columns, $params, $values){

        [ $err, $res ] =  Db::query("INSERT INTO creacionrol ({$columns}) VALUES ({$params})", $values); 

        if($err) {
            return $err;
        } 

        return $res->rowCount() > 0; // Cambiado affected_rows a rowCount para PDO
        
    }

    public static function identifyAdmin_Rol($values){
        //$Values es un arreglo en el cual lo destructuramos en la conexion de la base de datos
        //del archivo db.phpm asi que no es necesario colocarle [$values] ya que contendra todos
        //los valores que le pasemos del cliente al servidor
        [ $err, $res ] =  Db::query("SELECT * FROM creacionrol WHERE usuario = ? and password = ?", $values);

        if($err) {
            return false;
        } 
        return $res->fetch(PDO::FETCH_ASSOC); // Cambiado get_result()->fetch_assoc() a fetch(PDO::FETCH_ASSOC)
        
    }
}
