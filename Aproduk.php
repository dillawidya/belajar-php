<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
  

  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 

  <!-- Content Wrapper. Contains page content -->
  <?php include 'topbar.php'; ?>
  <?php include 'sidebar.php'; ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

    <!-- Main content -->
    <?php
$produk = array(
    array(
        "nama" => "Ayam Geprek",
        "harga" => 15000,
        "deskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "gambar" => "images/111.jpg" 
    ),
    array(
        "nama" => "Bakso",
        "harga" => 50000,
        "deskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "gambar" => "images/22.jpg"
    ),
    array(
        "nama" => "Infus Water",
        "harga" => 10000,
        "deskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "gambar" => "images/33.jpg"
    ),
    array(
        "nama" => "Jus Alpukat",
        "harga" => 20000,
        "deskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "gambar" => "images/44.jpg"
    ),
    array(
        "nama" => "koloke",
        "harga" => 25000,
        "deskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "gambar" => "images/55.jpg"
    ),
    array(
        "nama" => "Rendang",
        "harga" => 100000,
        "deskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "gambar" => "images/66.jpg"
    ),
    array(
        "nama" => "Soto Ayam",
        "harga" => 20000,
        "deskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "gambar" => "images/77.jpg"
    ),
    array(
        "nama" => "Sate Ayam",
        "harga" => 30000,
        "deskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "gambar" => "images/88.jpg"
    ),
    array(
        "nama" => "Mie Ayam",
        "harga" => 20000,
        "deskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "gambar" => "images/99.jpg"
    ),
    array(
        "nama" => "Mille Crepes",
        "harga" => 20000,
        "deskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "gambar" => "images/10.jpg"
    ),
    
);
?>

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Produk</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                  <?php foreach ($produk as $item): ?>
                    <tr>
                        <td><?php echo $item['nama']; ?></td>
                        <td><?php echo $item['harga']; ?></td>
                        <td><?php echo $item['deskripsi']; ?></td>
                        <td><img src="<?php echo $item['gambar']; ?>" alt="<?php echo $item['nama']; ?>" width="100"></td>
                    </tr>
                <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2023 <a href="../index.html"></a>.</strong>
    All rights reserved.
    
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="adminlte/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="adminlte/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="adminlte/plugins/raphael/raphael.min.js"></script>
<script src="adminlte/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="adminlte/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="adminlte/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="adminlte/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="adminlte/dist/js/pages/dashboard2.js"></script>
</body>
</html>
