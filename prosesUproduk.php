<?php 
include 'database/koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $product_name = $_POST["product_name"];
    $category_id = $_POST["category_id"];
    $product_code = $_POST["product_code"];
    $deskripsi = $_POST["deskripsi"];
    $price = $_POST["price"];
    $unit = $_POST["unit"];
    $discount_amount = $_POST["discount_amount"];
    $stock = $_POST["stock"];

    // Memperbarui data di tabel Produk
    $sql = "UPDATE products SET product_name='$product_name', category_id='$category_id', product_code='$product_code',
    deskripsi='$deskripsi', price='$price', unit='$unit', discount_amount='$discount_amount', stock='$stock' 
    WHERE id='$id'";

    if ($con->query($sql) === TRUE) {
        header("Location: Rproduk.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}

// Menutup koneksi
$con->close();
?>