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

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <?php include "./secciones/navbar.php" ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container VA EL ENLACE CON SIDEBAR-->
    <?php include "./secciones/sidebar.php" ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) ENLACE CON HEADER -->
      <?php include "./secciones/header.php"?>
      <!-- /.content-header -->
     
      <!-- Main content -->

      <!-- <section class="content">
        <div class="container-fluid">  CUANDO PONEMOS OTRA PÁGINA EN DONDE APARECE LA BARRA QUE TIENE JOSUÉ EN SU HOME
          <div class="row">
            <div class="col-12">
               Default box 
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Title</h3>-->
          <!-- /.row -->
          <!-- Main row -->
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
                <!-- /.card-header -->
                <!-- /.card-body -->
              <p>
                AQUÍ, PONEMOS ALGUNA OTRA COSILLA... TIPO INTRODUCCIÓN, UNA IMAGEN O UNA TABLA O UNA ANIMACIÓN "x". `PARA QUE LAS SECCIONES, SE REGRESEN A ESTA PÁGINA 
                PRINCIPAL, SIN DAR TODO EL TIEMPO "atrás"
               
              </p>
              
              <!-- /.card -->
              <!-- /.card -->
            </section>
          </div>
          <!-- /.row (main row) -->
            </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    <!-- /.content-wrapper -->
    <?php include "./secciones/footbar.php" ?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="./app/assets/code.js"></script> <!-- Ventana de 'bienvenida' al cargar la página -->
  <!-- <script>
    window.location.href = "/SECCION.php";
  </script> -->
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="./dist/js/demo.js"></script>
</body>

</html>