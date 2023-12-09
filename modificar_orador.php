<?php
require_once "./oradores.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    var_dump($_POST);

    $nombre = isset($_POST["orador_nombre_modificado"]) ? trim($_POST["orador_nombre_modificado"]) : null;
    $apellido = isset($_POST["orador_apellido_modificado"]) ? trim($_POST["orador_apellido_modificado"]) : null;
    $email = isset($_POST["orador_email_modificado"]) ? trim($_POST["orador_email_modificado"]) : null;
    $tema = isset($_POST["orador_tema_modificado"]) ? trim($_POST["orador_tema_modificado"]) : null;
    $id = isset($_POST["orador_id_modificado"]) ? $_POST["orador_id_modificado"] : null;
    $fecha = isset($_POST["orador_fecha_modificado"]) ? trim($_POST["orador_fecha_modificado"]) : null;

    $modificacion = "error";
    if (isset($nombre, $apellido, $email, $tema, $id, $fecha)) {
        if (!empty($nombre) && !empty($apellido) && !empty($email) &&  !empty($tema) && !empty($id) && !empty($fecha)) {

            $orador = new Orador();
            $orador->nombre = $nombre;
            $orador->apellido = $apellido;
            $orador->mail = $email;
            $orador->tema = $tema;
            $orador->id_orador = $id;
            $orador->fecha_alta = $fecha;

            if($orador->modificacion())$modificacion="exito";
        }
    }
    header("location:./administracion.php?mod_result={$modificacion}");
}
