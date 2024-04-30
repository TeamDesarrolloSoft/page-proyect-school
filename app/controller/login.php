<?php

session_start();

class ControllerLogin{

    public static function add(){
        $array = $_POST;

        $columns    = implode(', ', array_keys($array));
        $params     = implode(', ', array_map(fn()=> '?', $array));
        $values     = array_values($array);
        
        return ModelLogin::add( $columns, $params, $values ); 
        
    }

    public static function identifyAdmin_Rol(){
        $array = $_POST;
        $values = array_values($array);
        return ModelLogin::identifyAdmin_Rol($values);
        
    }





}

