<?php
    include 'database/koneksi.php';

    //mendapatkan ekstensi file
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $product_name = $_POST['product_name'];
        $category_id = $_POST['category_id'];
        $product_code = $_POST['product_code'];
        $deskripsi = $_POST['deskripsi'];
        $price = $_POST['price'];
        $unit = $_POST['unit'];
        $discount_amount = $_POST['discount_amount'];
        $stock = $_POST['stock'];
        
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        // Memasukkan data ke tabel Produk
        $sql = "INSERT INTO products (product_name, category_id, product_code, deskripsi, price, unit, discount_amount, stock, images) 
        VALUES ('$product_name', '$category_id', '$product_code', '$deskripsi', '$price', '$unit', '$discount_amount', '$stock', '$target_file')";
    
        if ($con->query($sql) === TRUE) {
            header("Location: Rproduk.php");
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    }
    
    // Menutup koneksi
    $con->close();

    

   
    ?>