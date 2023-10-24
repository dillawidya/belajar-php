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
                 $limit = 5; // Number of items per page
                 $page = isset($_GET['page']) ? $_GET['page'] : 1; // Current page number
                 $start = ($page - 1) * $limit; // Starting row number for the query
                 $result = $con->query("SELECT products.product_name, product_categories.category_name, products.product_code, products.deskripsi,
                 products.price, products.unit, products.discount_amount, products.stock, products.id
                 FROM products
                 INNER JOIN product_categories ON products.category_id = product_categories.id LIMIT $start, $limit");
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
                            <td>" . $row["category_name"]. "</td>
                            <td>" . $row["product_code"]. "</td>
                            <td>" . $row["deskripsi"]. "</td>
                            <td>" . $row["price"]. "</td>
                            <td>" . $row["unit"]. "</td>
                            <td>" . $row["discount_amount"]. "</td>
                            <td>" . $row["stock"]. "</td>
                            <td>
                            <a class='btn btn-warning btn-sm' href='Uproduk.php?edit_id={$row['id']}'>
                                <i class='fas fa-pencil-alt'>
                                </i>
                                Edit
                            </a>
                            <a class='btn btn-danger btn-sm' href='Dproduk.php?delete_id={$row['id']}'>
                                <i class='fas fa-trash'>
                                </i>
                                Hapus
                            </a>
                            </td>
                        </tr>";
                    }
                
                    echo "</table>";
                }
                
                 ?>
               
                </table>
                <br>
                <?php
                      $result = $con->query("SELECT COUNT(*) AS total FROM products");
                      $row = $result->fetch_assoc();
                      $total_rows = $row['total'];
                      $total_pages = ceil($total_rows / $limit);

                      if ($total_pages > 1) {
                          echo "<ul class='pagination justify-content-center'>";
                          if ($page > 1) {
                              echo "<li class='page-item'><a class='page-link' href='Rproduk.php?page=".($page-1)."'>Previous</a></li>";
                          }
                          for ($i = 1; $i <= $total_pages; $i++) {
                              echo "<li class='page-item ".($page == $i ? 'active' : '')."'><a class='page-link' href='Rproduk.php?page=$i'>$i</a></li>";
                          }
                          if ($page < $total_pages) {
                              echo "<li class='page-item'><a class='page-link' href='Rproduk.php?page=".($page+1)."'>Next</a></li>";
                          }
                          echo "</ul>";
                      }
                  ?>
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

