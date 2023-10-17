<?php
    include 'database/koneksi.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $product_name = $_POST['product_name'];
        $category_id = $_POST['category_id'];
        $product_code = $_POST['product_code'];
        $deskripsi = $_POST['deskripsi'];
        $price = $_POST['price'];
        $unit = $_POST['unit'];
        $discount_amount = $_POST['discount_amount'];
        $stock = $_POST['stock'];
    
        // Memasukkan data ke tabel Produk
        $sql = "INSERT INTO products (product_name, category_id, product_code, deskripsi, price, unit, discount_amount, stock) 
        VALUES ('$product_name', '$category_id', '$product_code', '$deskripsi', '$price', '$unit', '$discount_amount', '$stock')";
    
        if ($con->query($sql) === TRUE) {
            header("Location: Rproduk.php");
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
    
    // Menutup koneksi
    $con->close();

    

   
    ?>