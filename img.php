<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">

</head>

<body class="hold-transition sidebar-mini sidebar-collapse">

    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <?php include "./secciones/navbar.php" ?>
        <!-- /.navbar -->
        <!-- Main Sidebar Container VA EL ENLACE CON SIDEBAR-->
        <?php include "./secciones/sidebar.php" ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>IMAGEN</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/index.php">Home</a></li>
                                <li class="breadcrumb-item active">Pagina Principal</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <div class="container mt-5">
                <div>
                    <div class="flex-column row justify-content-between mab-2"> <!-- aquí va la parte de view, referencia-->
                        <div class="col-sm-6">
                            <h5>Formulario</h5>
                        </div>
                    </div>

                    <form action="upload.php" method="POST" enctype="multipart/form-data" onsubmit="appI.guardar()">   
                        <div class="mb-3">
                            <input type="hidden" id="idI" name="id" />
                            <label for="imagen" class="form-label">Imagen</label>
                            <input type="file" value="" class="form-control" name="imagen" id="imagen" placeholder="Imagen_Sección" autofocus required />
                            
                        <label for="id_seccionI" class="form-label">Nombre de la Sección</label>
                        <input type="text" class="form-control mb-2" name="id_seccionI" id="id_seccionI" placeholder="Sección" required />
                        <button type="submit" class="btn btn-secondary">Guardar</button>
                    </form>

                    <table class="table table-hover table-bordered w-60 mx-auto">
                        <thead>
                            <tr>
                                <th class="text-center" scope="col">ID</th>
                                <th class="text-center" scope="col">IMAGEN</th>
                                <th class="text-center" scope="col">ID_SECCIÓN</th>
                                <td class="text-center align-center" scope="col" colspan="2"></td>
                            </tr>
                        </thead>
                        <tbody id="tbodyI">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- ./wrapper -->
    <?php include "./secciones/footbar.php" ?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./app/assets/code.js"></script> <!-- Ventana de 'bienvenida' al cargar la página -->
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</body>
</html>