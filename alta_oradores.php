<?php
require_once "./oradores.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$nombre=isset($_POST["orador_nombre"])?trim($_POST["orador_nombre"]):null;
$apellido=isset($_POST["orador_apellido"])?trim($_POST["orador_apellido"]):null;
$email=isset($_POST["orador_email"])?trim($_POST["orador_email"]):null;
$tema=isset($_POST["orador_tema"])?trim($_POST["orador_tema"]):null;
$alta=false;
if(isset($nombre,$apellido,$email,$tema))
{

    if(empty($nombre) || empty($apellido) || empty($email) || empty($tema))
    {

        $alta=false;
    }else
    {
        $orador=new Orador();
        $orador->nombre=$nombre;
        $orador->apellido=$apellido;
        $orador->mail=$email;
        $orador->tema=$tema;
        $orador->fecha_alta=date("Y-m-d");
        $alta=$orador->alta();
    }


    


}
header("location:index.php?alta={$alta}");



}else{

    header("location:index.php");
}

?>