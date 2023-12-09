<?php


class Orador
{
    public int $id_orador;
    public string $nombre;
    public string $apellido;
    public string $mail;
    public string $tema;
    public string $fecha_alta;

    public function __construct()
    {
        $this->id_orador = -1;
        $this->nombre = "";
        $this->apellido = "";
        $this->mail = "";
        $this->tema = "";
        $this->fecha_alta = "";
    }
    public function alta(): bool
    {
        $alta = false;

        $conexion = mysqli_connect("localhost", "root", "", "integrador_cac");
        if (!mysqli_connect_errno()) {

            $query = "INSERT INTO `oradores`( `nombre`, `apellido`, `mail`, `tema`, `fecha_alta`)";
            $query .= "VALUES ('{$this->nombre}','{$this->apellido}','{$this->mail}','{$this->tema}','{$this->fecha_alta}')";


            $consulta = mysqli_query($conexion, $query);
            if ($consulta !== false) {
                $alta = true;
            }
            mysqli_close($conexion);

            return $alta;
        }
    }
    public function modificacion(): bool
    {
        $modificacion = false;

        $conexion = mysqli_connect("localhost", "root", "", "integrador_cac");
        if (!mysqli_connect_errno()) {
$query="UPDATE `oradores` SET `nombre`='{$this->nombre}',`apellido`='{$this->apellido}',`mail`='{$this->mail}',`tema`='{$this->tema}',`fecha_alta`='{$this->fecha_alta}' WHERE `id_orador`='{$this->id_orador}'";
      

            $consulta = mysqli_query($conexion, $query);
            if ($consulta !== false) {
                $modificacion = true;
            }
            mysqli_close($conexion);

            return $modificacion;
        }
    }
    public static  function eliminar($id): bool
    {
        $eliminacion = false;

        $conexion = mysqli_connect("localhost", "root", "", "integrador_cac");
        if (!mysqli_connect_errno()) {

            $query = "DELETE FROM  `oradores` WHERE  `id_orador`='{$id}'";

            $consulta = mysqli_query($conexion, $query);
            if ($consulta !== false) {
                $eliminacion = true;
            }
            mysqli_close($conexion);

            return $eliminacion;
        }
    }
    public static function listarTodos(): array |null
    {
        $oradores = null;

        $conexion = mysqli_connect("localhost", "root", "", "integrador_cac");
        if (!mysqli_connect_errno()) {

            $query = "SELECT * FROM oradores;";


            $consulta = mysqli_query($conexion, $query);
            if ($consulta !== false) {

                while ($obj = $consulta->fetch_object()) {

                    if (!empty($obj)) {

                        $orador = new Orador();
                        $orador->id_orador = $obj->id_orador;
                        $orador->nombre = $obj->nombre;
                        $orador->apellido = $obj->apellido;
                        $orador->mail = $obj->mail;

                        $orador->tema = $obj->tema;
                        $orador->fecha_alta = (string)$obj->fecha_alta;


                        $oradores[] = $orador;
                    }
                }
            }
            mysqli_close($conexion);
        }
        return $oradores;
    }
}
