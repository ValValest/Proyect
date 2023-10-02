<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog Personal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <link rel="stylesheet" href="./css/adminlte.css">
    <link rel="stylesheet" href="css/fontawesome.css">



</head>

<body class="bottom"><!--Primera sección, pantera con texto, dividido en dos columnas-->
    <nav class="navbar sticky-top navbar-expand-lg bg-black border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href=#>HOME</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Scholarship</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hobby</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Curiosities
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Projects</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <section id="mood" class="content">
        <div class="col-md-4 text">
            <h1 class="mt-5">Valeria</h1>
            <p class="mt-5">Conexión con base de datos
                <a href="https://getbootstrap.com/docs/4.0/layout/grid/" class="nav-toggle" target="_blank" style="color: aliceblue; text-decoration:none; border-bottom:1px dotted;"> HTML5 UP.</a>
            </p>
            <div class="but">
                <button type="button" class="btn btn-outline-light float right btn-lg"><a class="nav-toggle" href="https://getbootstrap.com/docs/4.0/layout/grid/" target="_blank" style="color:aliceblue" text-decoration="none;">Download</a>
                </button>
                <button type="button" class="btn btn-outline-light float right btn-lg"><a href="https://html5up.net/fractal" class="nav-toggle" target="_blank" style="color:aliceblue" text-decoration="none;"><i class="bi bi-cloud-download"></i>Learn More</a>
                </button>

            </div>
        </div>
        <div class="image">
            <div class="col-md-6">
                <img src="imagenes/pantera.jpeg" alt="" class="img-responsive">
            </div>
        </div>
    </section>

    <section class="vale">
        <!--"vale, va a contener a todas mis subsecciones de la parte media de la página, aqeuì se tiene la modificación de fondo"-->
        <div class="iconos">
            <div class="texti">
                <h2> "Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..."
                </h2>
                <br>

                <!-- ------------Conexión con base de datos, empezamos a editar pág. por medio de formulario------------------------------------------------------------------------ -->
                <?php
                require './conexion.php';

                $queryt = "SELECT titulo FROM seccion where id = 11;";
                $resultt = Connection::getConnection()->query($queryt);

                while ($row = $resultt->fetch(PDO::FETCH_ASSOC)) {
                    $descripciont = $row['titulo'];
                }
                


                $query_l = "SELECT nombre FROM seccion where id = 47;";
                $result_l = Connection::getConnection()->query($query_l);

                while ($row = $result_l->fetch(PDO::FETCH_ASSOC)) {
                    $descripcion_l = $row['nombre'];
                }
                $query_n = "SELECT descripcion FROM parrafo where id = 47;";
                $result_n= Connection::getConnection()->query($query_n);

                while ($row = $result_n->fetch(PDO::FETCH_ASSOC)) {
                    $descripcion_n = $row['descripcion'];
                }



                $query_v = "SELECT nombre FROM seccion where id = 46;";
                $result_v = Connection::getConnection()->query($query_v);

                while ($row = $result_v->fetch(PDO::FETCH_ASSOC)) {
                    $descripcion_v = $row['nombre'];
                }
                $query_m = "SELECT descripcion FROM parrafo where id = 46;";
                $result_m= Connection::getConnection()->query($query_m);

                while ($row = $result_m->fetch(PDO::FETCH_ASSOC)) {
                    $descripcion_m = $row['descripcion'];
                }



                $query_s = "SELECT nombre FROM seccion where id = 9;";
                $result_s = Connection::getConnection()->query($query_s);

                while ($row = $result_s->fetch(PDO::FETCH_ASSOC)) {
                    $descripcion_s = $row['nombre'];                        //ID9SECCIÓN/TITULOSEC:UNO/NOMBRESEC:VALERIA...:)
                }

                $query_d = "SELECT descripcion FROM parrafo where id = 4;";
                $result_d = Connection::getConnection()->query($query_d);

                while ($row = $result_d->fetch(PDO::FETCH_ASSOC)) {
                    $descripcion_d = $row['descripcion'];                   //ID4ENBDYTABDESCRIP/SECID11
                }



                $querys = "SELECT nombre FROM seccion where id = 11;";
                $results = Connection::getConnection()->query($querys);

                while ($row = $results->fetch(PDO::FETCH_ASSOC)) {
                    $descripcions = $row['nombre'];                         //SEC11/NOMBREHOLA,PROBANDO...
                }
                $query = "SELECT descripcion FROM parrafo where id = 3;";
                $result = Connection::getConnection()->query($query);

                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    $descripcion = $row['descripcion'];                     //ID3DELPÁRRAFOQUEVOYMODFICARID_SECCION11
                }



                $queryi = "SELECT imagen FROM imagen where id = 78;";
                $resulti = Connection::getConnection()->query($queryi);

                while ($row = $resulti->fetch(PDO::FETCH_ASSOC)) {
                    $descripcioni = $row['imagen'];
                }

                $query_i = "SELECT imagen FROM imagen where id = 79;";
                $result_i = Connection::getConnection()->query($query_i);

                while ($row = $result_i->fetch(PDO::FETCH_ASSOC)) {
                    $descripcion_i = $row['imagen'];
                }

                ?>
                <h1><?php echo $descripcion_s; ?></h1> <!--ID9SECCIÓN/TITULOSEC:UNO/NOMBRESEC:VALERIA...:)-->
                <h3>
                    <?php echo $descripcion_d; ?> <!--ID4ENBDYTABDESCRIP/SECID11 -->
                </h3>
            </div>
            <span class="">
                <i class="bi bi-radioactive" id="icon1"></i>
                <i class="bi bi-android2" id="icon2"></i>
                <i class="bi bi-skype" id="icon3"></i>
                <hr class="divider1"> <!--crea la línea tenue entre los íconos y la sección de las imgs-->
            </span>
        </div>
        <!-- Ya no se necesita hacer más secciones, basta con divs, se agregan en el contorno "vale" -->
        <div class="subcontent"> <!--primer recuadro con texto e imagen, todo dentro de subcontent-->
            <div class="text1">
            <h1><?php echo $descripcions; ?></h1>
                <h3>
                   <?php echo $descripcion; ?> <!--ID3 DEL PÁRRAFO QUE VOY A MODFICAR/SEC11-->
                     </h3>
                
            </div>
            <figure class="img">
                <img src="../../imagen/<?php echo $descripcioni; ?>" alt="" class="img">
                <!--PARA DAR ANIMACIÓN A LA IMGEN class="img animate__animated animate__fadeIn" style="animation-duration: 5s;">-->
                <hr class="divider">
            </figure>
        </div>
        <div class="subcontent">
            <figure class="img"> <!--Ocupamos figure para evitar que las imgs causen problemas-->
                <img src="../../imagen/<?php echo $descripcion_i; ?>" alt="" class="img">
                <hr class="divider">
            </figure>
            <div class="text1">
                <h1><?php echo $descripcion_v; ?></h1>
                <p>
                <?php echo $descripcion_m; ?>
                </p>
            </div>
        </div>
        <div class="subcontent">
            <div class="text1">
                <h1><?php echo $descripcion_l; ?></h1>
                <p>
                <?php echo $descripcion_n; ?>
                </p>
            </div>
            <figure class="img3">
                <img src="./imagenes/leon.jpg" alt="" class="img">
                <hr class="divider">
            </figure>
        </div>
        <div class="grupoiconos">
            <div class="texti">
                <h4> El pasaje estándar Lorem Ipsum, usado desde el año 1500.</h4>
                <br>
                <h5>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                    <br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.
                    <br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur.
                    <br>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim
                    id est laborum."
                </h5>
                <hr class="dividert">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <i class="bi bi-wrench-adjustable" id="icon1"></i>
                    </div>
                    <div class="col">
                        <i class="bi bi-music-player" id="icon2"></i>
                    </div>
                    <div class="col">
                        <i class="bi bi-whatsapp" id="icon3"></i>
                    </div>
                </div>
                <div class="row1">
                    <div class="col">
                        <i class="bi bi-search" id="icon4"></i>
                    </div>
                    <div class="col">
                        <i class="bi bi-google" id="icon5"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>