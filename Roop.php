<?php
include 'database.php';
$db = new Database();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Products</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="adminlte/plugins/select2/css/select2.min.css">
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
  <div class="content-wrapper">
  
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->

    <!-- Main content -->
  

<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
                        <div class="card-body">
                            <form action="search_result.php" method="post" class="form-inline">
                                <div class="form-group mr-2">
                                    <label for="keyword" class="mr-2">Search:</label>
                                    <input type="text" class="form-control" id="keyword" name="keyword">
                                </div>
                                <div class="form-group mr-2">
                                    <label for="kategori" class="mr-2">Kategori:</label>
                                    <select class="form-control" id="kategori" name="kategori">
                                    <option value="semua">Semua Kategori</option>
                                        <option value="Sports">Sports</option>
                                        <option value="Daily">Daily</option>
                                        <option value="Accesoris">Accesoris</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </form>
                        </div>
              <div class="card-header">
                <h3 class="card-title">Data Produk</h3>
              </div>
              <div class="card-header">
              <a class="btn btn-info btn-sm" href="Coop.php">
                  <i class="fas fa-plus">
                  </i>
                  Tambah Data
              </a>
              </div>
             
              
              <!-- /.card-header -->
              <div class="card-body">
                 
                    <table id='example2' class='table table-bordered table-hover'>
                        <tr>
                            <th>Nama</th>
                            <th>Kategori</th>
                            <th>Kode </th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Unit</th>
                            <th>Diskon</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                        <?php
                            foreach($db->tampil_data() as $produk) {

                            
                        ?>
                <tr>
                    <td><?= $produk['product_name']; ?></td>
                    <td><?= $produk['category_id']; ?></td>
                    <td><?= $produk['product_code']; ?></td>
                    <td><?= $produk['deskripsi']; ?></td>
                    <td><?= $produk['price']; ?></td>
                    <td><?= $produk['unit']; ?></td>
                    <td><?= $produk['discount_amount']; ?></td>
                    <td><?= $produk['stock']; ?></td>
                    <td>
                        <a class="btn btn-warning btn-sm" href="Uoop.php?id=<?php echo $produk['id']; ?>">
                            <i class='fas fa-pencil-alt'>
                            </i>
                            Edit
                        </a>
                        
                        <a class="btn btn-danger btn-sm" href="prosesCoop.php?id=<?php echo $produk['id']; ?>&aksi=hapus">
                            <i class='fas fa-trash'>
                            </i>
                            Hapus
                        </a>
                    </td>
                </tr>
                  
                  <?php
                  }
                  ?> 
               
                </table>
                <br>
                
                </div>
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
<script src="adminlte/plugins/select2/js/select2.full.min.js"></script>
</body>
</html>

