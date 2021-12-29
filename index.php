<?php
// error_reporting(0);
include 'model/Db.php';
$db = new Db();
if (empty($_SESSION['pengguna'])) {
  echo "<script>
  window.location='login.php';
  </script>";
}

?>
<!DOCTYPE html>
<html>

<head>
  <title>SPK Topsis</title>
  <?php include 'components/head.php' ?>
</head>

<body class="sidebar-collapse">
  <div class="wrapper">

    <!-- Navbar -->
    <?php include 'components/top-bar.php' ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->

    <!-- Content Wrapper. Contains page content -->
    <?php include 'content.php' ?>
    <!-- /.content-wrapper -->
    <?php include 'components/footer.php' ?>

    <!-- Control Sidebar -->
    <?php include 'components/custome.php' ?>
  </div>
  <!-- ./wrapper -->
  <?php include 'components/scripts.php' ?>
</body>

</html>