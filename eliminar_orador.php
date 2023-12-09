<?php 
require_once "./oradores.php";
if ($_SERVER["REQUEST_METHOD"] == "GET") {


    $id = isset($_GET["id_delete"])?$_GET["id_delete"] : null;

    $eliminacion = "error";
    if (isset($id) && (!empty($id))) {

            if(Orador::eliminar($id))$eliminacion="exito";
        }
    
    header("location:./administracion.php?delete_result={$eliminacion}");
}

?>