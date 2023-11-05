<?php
include 'database.php';
$db = new Database();

$detail = $db->edit($_GET['id'])
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update Data</title>

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


  <!-- Preloader -->
  

  <!-- Navbar -->
  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 

  <!-- Content Wrapper. Contains page content -->
  <?php include 'topbar.php'; ?>
  <?php include 'sidebar.php'; ?>
  
  
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Edit Produk</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="prosesCoop.php?aksi=update" method="post">
                <?php 
                    foreach($detail as $produk){
                ?>
                <div class="card-body">
                    <input type="hidden" name="id" value="<?php echo $produk['id']; ?>"/>
                  <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" name="product_name" class="form-control" placeholder="Nama Produk" value="<?php echo $produk['product_name']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Kategori Produk</label>
                    <input type="text" name="category_id" class="form-control" placeholder="Kategori Produk" value="<?php echo $produk['category_id']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Kode Produk</label>
                    <input type="text" name="product_code" class="form-control" placeholder="Kode Produk" value="<?php echo $produk['product_code']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" value="<?php echo $produk['deskripsi']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Harga</label>
                    <input type="text" name="price" class="form-control" placeholder="Harga" value="<?php echo $produk['price']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Satuan Unit</label>
                    <input type="text" name="unit" class="form-control" placeholder="Satuan Unit" value="<?php echo $produk['unit']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Diskon</label>
                    <input type="text" name="discount_amount" class="form-control" placeholder="Diskon %" value="<?php echo $produk['discount_amount']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Stok</label>
                    <input type="text" name="stock" class="form-control" placeholder="Stok" value="<?php echo $produk['stock']; ?>">
                  </div>
                </div>
                <?php
                }
                ?>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
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
