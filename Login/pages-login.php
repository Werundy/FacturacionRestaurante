<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistema - Restaurante</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="https://chineserestaurantcrossings.com/wp-content/uploads/2018/02/cropped-OP2-1-32x32.png" rel="icon">
    <link rel="stylesheet" href="../assets/iziToast-master/dist/css/iziToast.min.css">
  

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
   <link href="../assets/css/login-style.css" rel="stylesheet">
</head>

<body class="bg-color">
  <?php session_start(); ?>
    <div class="container">

          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                  <img src="https://chineserestaurantcrossings.com/wp-content/uploads/2018/02/OP2-1-1.png" class="card-img-top rounded mx-auto d-block" alt="The-Chinese-Restaurant-Logo.png">
                  </div>

                      <form class="row g-3 needs-validation form-padding" novalidate action="login.php" method="POST">

                        <div class="col-12">
                          <label for="yourUsername" class="form-label">Usuario</label>
                          <div class="input-group has-validation">
                            <span class="input-group-text" id="inputGroupPrepend">  </span>
                            <input type="text" name="txtUsuario" class="form-control" id="yourUsername" required>
                            <div class="invalid-feedback">*Campo obligatorio</div>
                          </div>
                        </div>

                        <div class="col-12">
                          <label for="yourPassword" class="form-label">Contraseña</label>
                          <input type="password" name="txtPass" class="form-control" id="yourPassword" required>
                          <div class="invalid-feedback">*Campo obligatorio</div>
                        </div>

                        <div class="col-12">

                        </div>
                        <div class="col-12">
                          <input type="submit" class="btn btn-primary w-100" value="Ingresar"/>
                        </div>
                      </form>

                </div>
              </div>

            </div>


    </div>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous">
  </script>
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
  <script src="../assets/js/main.js"></script>
        <script src="../assets/iziToast-master/dist/js/iziToast.min.js" type="text/javascript"></script>
  <script>
  function izzitoast(titulo, mensaje){
    iziToast.error({
        title: titulo,
        message: mensaje,
    });
  }
  </script> 

  <?php
      if(!isset($_SESSION['Validacion'])){
        $_SESSION['Validacion'] = false;
      }
      else if($_SESSION['Validacion']){
        print "<script>izzitoast('Error', 'El usuario o la contraseña son incorrectos').show();</script>";
        $_SESSION['Validacion'] = false;
      }
      
  ?>


</body>

</html>
