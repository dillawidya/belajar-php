<?php 
include 'database/koneksi.php';
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    // Menghapus data produk berdasarkan id_produk
    $sql = "DELETE FROM products WHERE id='$delete_id'";

    if ($con->query($sql) === TRUE) {
        header("Location: Rproduk.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}   
?>