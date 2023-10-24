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
                <h3 class="card-title">Form Produk</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?php include 'database/koneksi.php'; 
  
  if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];

    // Mengambil data produk berdasarkan id_produk
    $sql = "SELECT * FROM products WHERE id='$edit_id'";
    $result = $con->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $id = $row['id'];
        $product_name = $row['product_name'];
        $category_id = $row['category_id'];
        $product_code = $row['product_code'];
        $deskripsi = $row['deskripsi'];
        $price = $row['price'];
        $unit = $row['unit'];
        $discount_amount = $row['discount_amount'];
        $stock = $row['stock'];
?>
        <form action="prosesUproduk.php" method="post">

                <div class="card-body">
                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" name="product_name" class="form-control" placeholder="Nama Produk" value="<?php echo $row['product_name']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Kategori Produk</label>
                    <select name="category_id" class="form-control">
                        <option value="1" <?php echo ($row['category_id'] === '1') ? 'selected' : ''; ?>>Sport</option>
                        <option value="2" <?php echo ($row['category_id'] === '2') ? 'selected' : ''; ?>>Daily</option>
                        <option value="3" <?php echo ($row['category_id'] === '3') ? 'selected' : ''; ?>>Accecoris</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Kode Produk</label>
                    <input type="text" name="product_code" class="form-control" placeholder="Kode Produk" value="<?php echo $row['product_code']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" value="<?php echo $row['deskripsi']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Harga</label>
                    <input type="text" name="price" class="form-control" placeholder="Harga" value="<?php echo $row['price']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Satuan Unit</label>
                    <input type="text" name="unit" class="form-control" placeholder="Satuan Unit" value="<?php echo $row['unit']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Diskon</label>
                    <input type="text" name="discount_amount" class="form-control" placeholder="Diskon %" value="<?php echo $row['discount_amount']; ?>">
                  </div>
                  <div class="form-group">
                    <label>Stok</label>
                    <input type="text" name="stock" class="form-control" placeholder="Stok" value="<?php echo $row['stock']; ?>">
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-warning">Edit</button>
                </div>
              </form>
              <?php
    } else {
        echo "Produk tidak ditemukan.";
    }
    
} else {
    // Mengambil data dari tabel Produk
    $sql = "SELECT * FROM products";
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
}
    
    // Menutup koneksi
    $con->close();
  ?>
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