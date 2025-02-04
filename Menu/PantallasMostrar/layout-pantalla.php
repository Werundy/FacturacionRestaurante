<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TheChinese</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <style>



    .header .toggle-sidebar-btn {
  font-size: 32px;
  padding-left: 10px;
  cursor: pointer;
  color: #fff;
}
.sidebar, .header{
  background: #C9D6FF;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #E2E2E2, #C9D6FF);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #E2E2E2, #C9D6FF); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

.logo span {
  font-size: 30px;
  font-weight: 700;
  color: #BF0404;
  font-family: "Nunito", sans-serif;
}

  </style>

</head>

<body>
    <?php session_start(); 
  if($_SESSION["Usuario"] == ""){
    echo "<script>window.location.assign('../../Login/pages-login.php');</script>";
  }

   if(isset($_GET['logout'])){
    session_destroy();
    echo "<script>window.location.assign('../../Login/pages-login.php');</script>";
  }
  
  ?>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="blank.php" class="logo d-flex align-items-center">

        <span class="d-none d-lg-block">Restaurante 中国</span>
      </a>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Buscar" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

    

        <li class="nav-item dropdown pe-3">

           <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo isset($_SESSION["Usuario"]) ? $_SESSION["Usuario"] : ""; ?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?php echo isset($_SESSION["Usuario"]) ? $_SESSION["Usuario"] : ""; ?></h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="?logout=1">
                <i class="bi bi-box-arrow-right"></i>
                <span>Salir</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">



      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>General</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="pages-usuarioindex.php">
              <i class="bi bi-circle"></i><span>Usuarios</span>
            </a>
          </li>
          <li>
            <a href="pages-empleadoindex.php">
              <i class="bi bi-circle"></i><span>Empleados</span>
            </a>
          </li>
          <li>
            <a href="pages-proveedoresindex.php">
              <i class="bi bi-circle"></i><span>Proveedores</span>
            </a>
          </li>
          <li>
            <a href="pages-clientesindex.php">
              <i class="bi bi-circle"></i><span>Clientes</span>
            </a>
          </li>
                    <li>
            <a href="pages-paisesindex.php">
              <i class="bi bi-circle"></i><span>Paises</span>
            </a>
          </li>
          <li>
            <a href="pages-ciudadesindex.php">
              <i class="bi bi-circle"></i><span>Ciudades</span>
            </a>
          </li>
          <li>
            <a href="pages-comunidadesindex.php">
              <i class="bi bi-circle"></i><span>Comunidades</span>
            </a>
          </li>
          <li>
            <a href="pages-estadoscivilesindex.php">
              <i class="bi bi-circle"></i><span>Estado Civiles</span>
            </a>
          </li>
          <li>
            <a href="pages-rolesindex.php">
              <i class="bi bi-circle"></i><span>Roles</span>
            </a>
          </li>
          <li>
            <a href="pages-menusindex.php">
              <i class="bi bi-circle"></i><span>Menus</span>
            </a>
          </li>
          <li>
            <a href="pages-menudetallesindex.php">
              <i class="bi bi-circle"></i><span>Menu Detalles</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->
      

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Inventario</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="pages-almacenesindex.php">
              <i class="bi bi-circle"></i><span>Almacenes</span>
            </a>
          </li>   
          <li>
            <a href="pages-ingredientesindex.php">
              <i class="bi bi-circle"></i><span>Ingredientes</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <a class="nav-link collapsed mb-1" href="pages-comprasindex.php">
          <i class="bi bi-menu-button-wide"></i><span>Compras</span></i>
        </a>
       
      <li class="nav-item">
      <a class="nav-link collapsed mb-1" href="pages-ventasindex.php">
      <i class="bi bi-layout-text-window-reverse"></i></i><span>Ventas</span></i>
        </a>
      </li><!-- End Tables Nav -->

    


    </ul>

  </aside><!-- End Sidebar-->





  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous">
  </script>
  <script src="../assets/js/main.js"></script>
  <script>
        $(document).ready(function() {
        $('#TablaE1').DataTable( {
            "language": {
                "decimal":        ".",
                "emptyTable":     "Sin datos para mostrar",
                "info":           "Mostrando _START_ hasta _END_ de _TOTAL_ registros",
                "infoEmpty":      "Sin registros",
                "infoFiltered":   "(filtered from _MAX_ total entries)",
                "infoPostFix":    "",
                "thousands":      ",",
                "lengthMenu":     "Mostrar _MENU_ registros",
                "loadingRecords": "Cargando...",
                "processing":     "",
                "search":         "Buscar:",
                "zeroRecords":    "No matching records found",
                "paginate": {
                    "first":      "Primero",
                    "last":       "Ultimo",
                    "next":       "Siguiente",
                    "previous":   "Anterior"
                },
                "aria": {
                    "sortAscending":  ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                
                }
                }
            } );
        } );
    </script>
</body>

</html>
