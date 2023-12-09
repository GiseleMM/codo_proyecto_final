<?php

require_once "./oradores.php";
function mensajeEliminacion($id)
{
    $eliminacio = "./eliminar_orador.php?id_delete={$id}";
    $modal = '<div class="alert alert-dark m-3" role="alert">
 ESTA SEGURO DE ELIMINAR ORADOR CON ID : ' . $id . '?
         <a class="btn btn-light m-3" role="button"  href="./administracion.php">Close</button>
          <a class="btn btn-warning m-3" role="button" href="' . $eliminacio . '" >SI,CONFIRMO</a>
        </div>
';

    return $modal;
}
function mensajeExito(string $mensaje)
{
    $alert = '<div class="alert alert-success" role="alert">';
    $alert .= $mensaje;
    $alert .= '  </div>';
    return $alert;
}
function tabla(array $array): string
{
    $grilla = ' 
    <h1 class="text-center m-5">Listado de oradores</h1>
    <div class="table-responsive-md">
  

    <table class="table table-sm table-dark table-striped">
    <thead >
        <tr>
        <th>id_orador</th>
        <th>nombre</th>
        <th>apellido</th>
        <th>mail</th>
        <th>tema</th>
        <th>fecha_alta</th>
        
        <th>Delete/Update</th>
        </tr>
        </thead>
        <tbody>
            ';
    foreach ($array as $key => $value) {
    

        $grilla .= '<tr><td>' . $value->id_orador;
        $grilla .= '</td><td>' . $value->nombre;
        $grilla .= '</td><td>' . $value->apellido;
        $grilla .= '</td></td><td>' . $value->mail;
        $grilla .= '</td></td><td>' . $value->tema;
        $grilla .= '</td></td><td>' . $value->fecha_alta;

        //        $eliminar = "./eliminar_orador.php?id={$value->id_orador}";
        $eliminar = "./administracion.php?id_delete={$value->id_orador}";

        $modificar = "./administracion.php?id_mod={$value->id_orador}";

        $grilla .= '</td><td> <div class="d-grid gap-2 d-md-flex justify-content-md-end"> <a class="btn btn-danger " href="' . $eliminar . '" role="button" >ELIMINAR</a>';
        $grilla .= '<a class="btn btn-warning " href="' . $modificar . '" role="button" >MODIFICAR</a></div> <td>
        </tr>';
    }
    $grilla .= '
            </tbody>
            </table> </div>';
    return $grilla;
}
function mensajeError(string $mensaje)
{
    $alert = '<div class="alert alert-danger mt-3" role="alert">';
    $alert .= $mensaje;
    $alert .= ' </div>';
    return $alert;
}
function formularioModificacion(Orador $orador)
{

    $form = '<form action="./modificar_orador.php" method="post">
    <div class="row  justify-content-md-center">
        <div class="col-12">
            <hgroup class="text-center">
                <h5 class="fw-lighter">MODIFICAR ORADOR</h5>
                <h3>Orador</h3>
            </hgroup>

        </div>
        <div class="col-md-6 mb-3 ">
            <input type="text" class="form-control" id="orador_nombre_modificado" name ="orador_nombre_modificado"aria-describedby="nombreHelp"
                placeholder="Nombre" value="' . $orador->nombre . '"required>
        </div>
        <div class="col-md-6 mb-3">
            <input type="text" class="form-control" id="orador_apellido_moidficado" name ="orador_apellido_modificado"placeholder="Apellido"
            value="' . $orador->apellido . '" required>
        </div>
        <div class="col-md-6 mb-3">
            <input type="email" class="form-control" id="orador_email_modificado" name ="orador_email_modificado"placeholder="email" value="' . $orador->mail . '"required>
        </div>
        
        <div class="col-md-3 mb-3">
            <input type="number" class="form-control" id="orador_id_modificado" name ="orador_id_modificado" readonly value=' . $orador->id_orador . '>
        </div>
        <div class="col-md-3 mb-3">
            <input type="date" class="form-control" id="orador_fecha_modificado" name ="orador_fecha_modificado" readonly value=' . $orador->fecha_alta . '>
        </div>
    </div>
    <div class="row">
        <textarea class="col-md-12 form-control-lg" aria-label="With textarea"
            placeholder="Sobre qué quieres hablar?" rows="4" cols="50" id="orador_tema_modificado" name ="orador_tema_modificado" >' . $orador->tema . '</textarea>
    </div>
    <div class="row">
    <div class="col">
        <button type="submit" class="btn btn-success w-100">Modificar</button>
    </div>
    
    ';
    return $form;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



    <!-- MI CSS -->
    <link rel="stylesheet" href="./style.css">
    <title>Comprar tickets</title>
</head>

<body class="vh-100">
    <header class="container-fluid">
        <div class="row bg-dark align-items-center">
            <div class="col-12 col-md-10">
                <nav class="nav  justify-content-center justify-content-md-end">

                    <a href="./index.php" class="nav-link link-secondary">La conferencia</a>
                    <a href="#section-oradores" class="nav-link link-secondary">Los oradores</a>
                    <a href="#" class="nav-link link-secondary">El lugar y la fecha</a>
                    <a href="#section-form" class="nav-link link-secondary">Conviértete en orador</a>

                    <a href="./comprar_tickets.html" class="nav-link link-success">Comprar tickets</a>
                    <a href="./administracion.php" class="nav-link link-success"> Administracion</a>

                </nav>
            </div>
        </div>

    </header>

    <div>
        <div class="container-fluid mt-1">
            <?php
            $array = Orador::listarTodos();
            if (isset($array)) {


                //Obtener id para modificaion
                if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id_mod"])) {
                    $orador = null;
                    // var_dump($_GET);
                    foreach ($array as $key => $value) {
                        if ($value->id_orador == trim($_GET["id_mod"])) {
                            $orador = $value;
                            break;
                        }
                    }
                    if (isset($orador)) {
                        echo formularioModificacion($orador);
                    } else {
                        echo   mensajeError("Error en  modificar orador");
                    }
                }

                //modificar en base de datos
                if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["mod_result"])) {

                    $modificacion = trim($_GET["mod_result"]);
                    if ($modificacion == "error") {
                        echo  mensajeError("No se pudo modicar verifique datos ingresados");
                    } else {
                        echo  mensajeExito("Modificacion exitosa");
                    }
                }

                //envio id a eliminar
                if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id_delete"])) {

                    $id_delete = trim($_GET["id_delete"]);

                    echo mensajeEliminacion($id_delete);
                }

                //eliminacio en base de datos
                if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["delete_result"])) {

                    $eliminacio = trim($_GET["delete_result"]);
                    if ($eliminacio == "error") {
                        echo  mensajeError("No se pudo ELIMINAR de la base de datos");
                    } else {
                        echo  mensajeExito("Eliminacion exitosa");
                    }
                }





                //SIEMPRE MUESTRO TABLA
                echo tabla($array);
            } else {
                echo mensajeError("Error en listado de  oradores :( intente mas tarde...");
            }



            ?>

        </div>

    </div>
    <footer>
        <div class="w-100 h-25">footer</div>
    </footer>

</body>


</html>