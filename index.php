


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



    <!-- MI CSS -->
    <link rel="stylesheet" href="./style.css">
    <title>Tp integrador</title>
</head>

<body>
    <header class="container-fluid">
        <div class="row bg-dark align-items-center">
            <div class="col-12 col-md-2 d-flex justify-content-center">
                <img class="w-50" src="./imagenes/codoacodo.png" alt="">
            </div>

            <div class="col-12 col-md-10">
                <nav class="nav  justify-content-center justify-content-md-end">

                    <a href="#" class="nav-link link-secondary">La conferencia</a>
                    <a href="#section-oradores" class="nav-link link-secondary">Los oradores</a>
                    <a href="#" class="nav-link link-secondary">El lugar y la fecha</a>
                    <a href="#section-form" class="nav-link link-secondary">Conviértete en orador</a>

                    <a href="./comprar_tickets.html" class="nav-link link-success">Comprar tickets</a>
                    <a href="./administracion.php" class="nav-link link-success"> Administracion</a>

                </nav>
            </div>



        </div>

    </header>




    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active m-0">
                <img src="./imagenes/ba1.jpg" class="d-block w-100" alt="baner1">
                <div class="carousel-caption d-none d-md-block text-end">
                    <h1>La conferencia</h1>
                    <p>Bs As llega por primera vez a Argentina.Un evento para compartir con nuestra
                        comunidade el conocimiento y experiencia de los expertos que están creando el futuo
                        de Internet. Ven a conocer a miembros del evento, a otros estudiantes de Codo a Codo
                        y los oradores de primer nivel que tenermos para ti.Te esperamos !</p>
                    <button type="button" class="btn  btn-outline-light">Quiero ser orador</button>
                    <button type="button" class="btn btn-success">Comprar tickets</button>

                </div>
            </div>
            <div class="carousel-item">
                <img src="./imagenes/ba2.jpg" class="d-block w-100" alt="baner2">
                <div class="carousel-caption d-none d-md-block text-end">
                    <h1>La conferencia</h1>
                    <p>Bs As llega por primera vez a Argentina.Un evento para compartir con nuestra
                        comunidade el conocimiento y experiencia de los expertos que están creando el futuo
                        de Internet. Ven a conocer a miembros del evento, a otros estudiantes de Codo a Codo
                        y los oradores de primer nivel que tenermos para ti.Te esperamos !</p>
                    <button type="button" class="btn  btn-outline-light">Quiero ser orador</button>
                    <button type="button" class="btn btn-success">Comprar tickets</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./imagenes/ba3.jpg" class="d-block w-100" alt="baner3">
                <div class="carousel-caption d-none d-md-block text-end">

                    <h1>La conferencia</h1>
                    <p>Bs As llega por primera vez a Argentina.Un evento para compartir con nuestra
                        comunidade el conocimiento y experiencia de los expertos que están creando el futuo
                        de Internet. Ven a conocer a miembros del evento, a otros estudiantes de Codo a Codo
                        y los oradores de primer nivel que tenermos para ti.Te esperamos !</p>
                    <button type="button" class="btn  btn-outline-light">Quiero ser orador</button>
                    <button type="button" class="btn btn-success">Comprar tickets</button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>


    <main>
        <!-- seccion cards ------------------------------------------------------------------------------------------------------------->
        <section class="container" id="section-oradores">
            <hgroup class="text-center">
                <h3 class="text-muted">CONOCE ALOS </h3>
                <h2>ORADORES</h2>
            </hgroup>

            <div class="row row-cols-3">
                <article class="col">


                    <div class="card border-light mb-3">

                        <img class="card-img-top" src="./imagenes/steve.jpg" alt="Steve Jobs">

                        <div class="card-body">
                            <h5>
                                <span class="badge bg-warning text-dark">Javascript</span>
                                <span class="badge bg-info">React</span>
                            </h5>
                            <h5 class="card-title"> Steve Jobs</h5>
                            <p class="card-text">Steven Paul Jobs (San Francisco, 24 de febrero de 1955-Palo Alto, 5 de
                                octubre de 2011)fue un empresario, diseñador industrial, magnate empresarial,
                                propietario de medios e inversor estadounidense. Fue cofundador y presidente ejecutivo
                                de Appley máximo accionista individual de The Walt Disney Company</p>

                        </div>
                    </div>

                </article>
                <article class="col">


                    <div class="card border-light mb-3">

                        <img class="card-img-top" src="./imagenes/ada.jpeg" alt="Ada Lovelace">

                        <div class="card-body">
                            <h5>
                                <span class="badge bg-secondary">Negocios</span>
                                <span class="badge bg-danger">Startups</span>
                            </h5>
                            <h5 class="card-title"> Ada Lovelace</h5>
                            <p class="card-text">Augusta Ada King, condesa de Lovelace (Londres, 10 de diciembre de
                                1815-íd., 27 de noviembre de 1852), registrada al nacer como Augusta Ada Byron y
                                conocida habitualmente como Ada Lovelace, fue una matemática y escritora británica,
                                célebre sobre todo por su trabajo acerca de la computadora mecánica de uso general de
                                Charles Babbage, la denominada máquina analítica</p>

                        </div>
                    </div>

                </article>
                <article class="col">


                    <div class="card border-light mb-3">

                        <img class="card-img-top" src="./imagenes/bill.jpg" alt="Bill Gates">

                        <div class="card-body">
                            <h5>
                                <span class="badge bg-warning text-dark">Javascript</span>
                                <span class="badge bg-info">React</span>
                            </h5>
                            <h5 class="card-title"> Bill Gates</h5>
                            <p class="card-text">William Henry Gates III (Seattle, Washington; 28 de octubre de 1955),
                                más conocido como Bill Gates, es un magnate empresarial, desarrollador de software,
                                inversor, autor y filántropo estadounidense. Es cofundador de Microsoft, junto con su
                                difunto amigo de la infancia Paul Allen.</p>

                        </div>
                    </div>

                </article>


            </div>
        </section>


        <!-- Seccion  -->

        <section class="card bg-dark text-light mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="./imagenes/honolulu.jpg" alt="honolulu" class="img-fluid rounded-start">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Bs-As Octubre</h5>

                        </p>
                        <p class="card-text">
                            Buenos Aires es la provincia y localidad más grande del estado de Argentina, en los Estados
                            Unidos.Honolulu es la más sureña de enre las principales ciudades estadounidenses. Aunque el
                            nombre de
                            Honolulu se refiere alñ área urbana en la consta sureste de la isla de Oahu, la ciudad y el
                            condado de
                            Honolulu han formado una cuidad consolidada que cubre toda la ciudad(aproximadamente 600 km
                            <sub>2</sub>
                            de superficie
                        </p>
                        <a href="#" class="btn border-light btn-dark">Conocé mas</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- FOERMULARIO---------------------------------------------------------------------- -->
        <section class="container" id="section-form">

            <form action="./alta_oradores.php" method="post">
                <div class="row  justify-content-md-center">
                    <div class="col-12">
                        <hgroup class="text-center">

                            <h5 class="fw-lighter">CONVIÉRTETE EN UN </h5>
                            <h3>Orador</h3>
                            <h5 class="fw-lighter">Anótate como rador para dar un charla.Cuéntanos de qué quieres
                                hablar!</h5>
                        </hgroup>

                    </div>
                    <div class="col-md-6 mb-3 ">
                        <input type="text" class="form-control" id="orador_nombre" name ="orador_nombre"aria-describedby="nombreHelp"
                            placeholder="Nombre" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" id="orador_apellido" name ="orador_apellido"placeholder="Apellido"
                            required>
                    </div>
                    <div class="col-md-12 mb-3">
                        <input type="email" class="form-control" id="orador_email" name ="orador_email"placeholder="email" required>
                    </div>
                </div>
                <div class="row">
                    <textarea class="col-md-12 form-control-lg" aria-label="With textarea"
                        placeholder="Sobre qué quieres hablar?" rows="4" cols="50" id="orador_tema" name ="orador_tema"></textarea>
                    <div id="temaHelp" class="col-12 form-text ">Recuerda incluir un título para tu charla.</div>
                </div>
                <?php 
                
              //PARA EL ALTA DEL ORADOR
            
                if(isset($_GET["alta"]))
                {
                    $alta=trim($_GET["alta"]);
                    if($alta)
                    {
                        $oculto='<div class="alert alert-success" role="alert">
                        Se a registrado orador en base de datos :)
                      </div>';
                    }else
                    {
                        $oculto='<div class="alert alert-danger" role="alert">
                        NO se pudo llevar a cabo alta por favor compruebe datos requeridos </div>';
                    }
                    echo $oculto;

                }



                ?>
                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-success w-100">Enviar</button>
                    </div>
            </form>

        </section>
        <footer class="container-fluid h-25">
            <div class="row mt-3">
                <ul class="nav  justify-content-evenly">
                    <li class="nav-item">
                        <a class="nav-link link-light" href="#">Preguntas frecuentes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-light" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-light" href="#">Prensa</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link link-light" href="#">Conferencia</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link link-light" href="#">Terminos y condiciones</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link link-light" href="#">Privacidad</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link link-light" href="#">Estudiantes</a>
                    </li>

                </ul>

            </div>

        </footer>


    </main>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <!-- <script src="./script.js"></script> -->

</body>

</html>