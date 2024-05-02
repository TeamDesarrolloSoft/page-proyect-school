<?php
// require_once 'db.php'; // Asegúrate de incluir el archivo que contiene la clase Db

class ModeleventosAdmin{

    public static function add($columns, $params, $values){

        [ $err, $res ] =  Db::query("INSERT INTO eventosadmin ({$columns}) VALUES ({$params})", $values); 

        if($err) {
            return $err;
        } 

        return $res->rowCount() > 0; // Cambiado affected_rows a rowCount para PDO
        
    }

    public static function mostrarEventosAdmin(){

        [ $err, $res ] =  Db::query("SELECT * FROM eventosadmin"); 

        if($err) {
            return [];
        } 

        return $res->fetchAll(PDO::FETCH_ASSOC); // Cambiado get_result()->fetch_all(MYSQLI_ASSOC) a fetchAll(PDO::FETCH_ASSOC)
    }
    public static function eliminandoEventos($id){

        [ $err, $res ] =  Db::query("DELETE FROM eventosadmin where id = ?",[$id]); 

        if($err) {
            return false;
        } 
        return $res->rowCount() > 0; // Cambiado affected_rows a rowCount para PDO
        
    }
}
