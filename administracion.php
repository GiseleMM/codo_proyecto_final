<?php

require_once "./oradores.php";
function tabla(array $array): string
{
    $grilla = ' 
    <h1 class="text-center m-5">Listado de oradores</h1>
    <div class="table-responsive-md">
  

    <table class="table table-dark table-striped">
    <thead>
        <tr>
        <th>id_orador</th>
        <th>nombre</th>
        <th>apellido</th>
        <th>mail</th>
        <th>tema</th>
        <th>fecha_alta</th>
        </tr>
        </thead>
        <tbody>
            ';
    foreach ($array as $key => $value) {
        $grilla .= '<tr><td>' . $value->id_orador . '</td><td>' . $value->nombre . '</td><td>' . $value->apellido . '</td></td><td>' . $value->mail . '</td></td><td>' . $value->tema . '</td></td><td>' . $value->fecha_alta . '</td></tr>';
    }
    $grilla .= '
            </tbody>
            </table> </div>';
    return $grilla;
}
function mensajeError(string $mensaje)
{
    $alert = '<div class="alert alert-danger" role="alert">';
    $alert .= $mensaje;
    $alert .= ' </div>';
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

                echo tabla($array);
            } else {
                echo mensajeError("Error en listado de  oradores :( intente mas tarde...");
            }
            ?>

        </div>

    </div>
</body>

</html>