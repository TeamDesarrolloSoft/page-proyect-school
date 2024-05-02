<?php 
$crud_producto = new ModelpublicacionesAdmin();

if(isset($_POST["btn_editar_prod"])){
    $Autor = new Variables();

    $Autor->Nombre = $_POST["txt_nombre"];
    $Autor->Rol = $_POST["txt_roles"];
    $Autor->Fecha = $_POST["txt_fecha"];
    $Autor->titulo = $_POST["txt_titulo"];
    $Autor->img = $_POST["txt_foto"];
    $Autor->Desc = $_POST["txt_desc"];


    if($tipo == "r"){

    }else if ($tipo == "e"){
        $crud_producto->EditarPubliciones($Autor);
    }
    header("location: ../view/listar_autores.php");

}