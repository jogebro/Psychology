<?php
  $routesArray = explode("/", $_SERVER['REQUEST_URI']);
  $routesArray = array_filter($routesArray);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Fixed Sidebar</title>

  <!-- STYLES -->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="views/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="views/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="views/assets/plugins/adminlte/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="views/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="views/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="views/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

  <!-- SCRIPTS -->
  <!-- jQuery -->
  <script src="views/assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="views/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <!-- overlayScrollbars -->
  <script src="views/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="views/assets/plugins/adminlte/js/adminlte.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="views/assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="views/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="views/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="views/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="views/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="views/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="views/assets/plugins/jszip/jszip.min.js"></script>
  <script src="views/assets/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="views/assets/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="views/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="views/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="views/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
    <?php include "views/modules/navbar.php" ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
    <?php include "views/modules/sidebar.php" ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php
     /*  echo "<pre>";
      print_r($routesArray);
      echo "</pre>"; */

      if (!empty($routesArray[4])) {
        if ($routesArray[4]=="users" || 
            $routesArray[4]=="clinicHistory" || 
            $routesArray[4]=="interviews" ||
            $routesArray[4]=="psychologists" ||
            $routesArray[4]=="treatment") {
              include "views/pages/".$routesArray[4]."/".$routesArray[4].".php";
        }
      }else{
        include "views/pages/home/home.php";
      }
    ?>
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include "views/modules/footer.php" ?>
  
</div>
<!-- ./wrapper -->
</body>
</html>