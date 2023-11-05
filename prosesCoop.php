<?php
include 'database.php';
$db = new Database();
$aksi = $_GET['aksi'];

if($aksi == "tambah") {
    $db->tambah_data($_POST['product_name'], $_POST['category_id'], $_POST['product_code'], $_POST['deskripsi'], $_POST['price'], $_POST['unit'], $_POST['discount_amount'], $_POST['stock']);
    header("location:Roop.php");
} elseif ($aksi == "update") {
    $db->update_data($_POST['id'], $_POST['product_name'], $_POST['category_id'], $_POST['product_code'], $_POST['deskripsi'], $_POST['price'], $_POST['unit'], $_POST['discount_amount'], $_POST['stock']);
    header("location:Roop.php");
} elseif($aksi == "hapus"){
    $db->hapus_data($_GET['id']);
    header("location:Roop.php");
}

?>