<?php

 include '../config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- asset-header -->
 <?php
 include 'layout/asset_header.php';
?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
<!-- navbar -->
<?php
 include 'layout/navbar.php';
?>
<!-- sidebar -->
<?php
 include 'layout/sidebar.php';
?> 
  <!-- content-header -->
<?php
 include 'layout/header.php';
?> 

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <?php
        include 'content.php';
        ?>  

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
 include 'layout/footer.php';
?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- asset footer -->
<?php
 include 'layout/asset_footer.php';
?>

</body>
</html>