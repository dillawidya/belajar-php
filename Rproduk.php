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
              <div class="card-header">
                <h3 class="card-title">Data Produk</h3>
              </div>
              <div class="card-header">
              <a class="btn btn-info btn-sm" href="Cproduk.php">
                  <i class="fas fa-plus">
                  </i>
                  Tambah Data
              </a>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                 <?php 
                 include 'database/koneksi.php';

                 // Mengambil data dari tabel Produk
                 $sql = "SELECT * FROM products ORDER BY id DESC";
                 $result = $con->query($sql);
                 if ($result->num_rows > 0) {
                    echo "<table id='example2' class='table table-bordered table-hover'>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Kategori Produk</th>
                            <th>Kode Produk</th>
                            <th>Deskripsi</th>
                            <th>Harga</th>
                            <th>Unit</th>
                            <th>Diskon</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>";
                
                    // Output data dari setiap baris
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>
                            <td>" . $row["product_name"]. "</td>
                            <td>" . $row["category_id"]. "</td>
                            <td>" . $row["product_code"]. "</td>
                            <td>" . $row["deskripsi"]. "</td>
                            <td>" . $row["price"]. "</td>
                            <td>" . $row["unit"]. "</td>
                            <td>" . $row["discount_amount"]. "</td>
                            <td>" . $row["stock"]. "</td>
                            <td>
                            <a class='btn btn-warning btn-sm' href='Uproduk.php?edit_id=" . $row["id"] . "'>
                                <i class='fas fa-pencil-alt'>
                                </i>
                                Edit
                            </a>
                            <a class='btn btn-danger btn-sm' href='Dproduk.php?delete_id=" . $row["id"] . "'>
                                <i class='fas fa-trash'>
                                </i>
                                Hapus
                            </a>
                            </td>
                        </tr>";
                    }
                
                    echo "</table>";
                } else {
                    echo "0 hasil";
                }
                
                // Menutup koneksi
                $con->close();
                 ?>
               
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

