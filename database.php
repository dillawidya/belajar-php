<?php
class Database {
    public $servername = "127.0.0.1";
    public $username = "root";
    public $password = "";
    public $dbname = "pos_shop";
    public $conn;

    function __construct() 
    {

        $this->conn = mysqli_connect($this->servername, $this->username, $this->password);

        mysqli_select_db($this->conn, $this->dbname);
    }

    public function getConnection() {
        return $this->conn;
    }

    public function closeConnection() {
        $this->conn->close();
    }

    function tampil_data() 
    {
        $data = mysqli_query($this->conn, "SELECT * from products");
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
        
        return $rows;
    }

    function tambah_data($product_name, $category_id, $product_code, $deskripsi, $price, $unit, $discount_amount, $stock)
    {
        mysqli_query($this->conn, "INSERT INTO products (product_name, category_id, product_code, deskripsi, price, unit, discount_amount, stock) VALUES ('$product_name', '$category_id', '$product_code', '$deskripsi', '$price', '$unit', '$discount_amount', '$stock')");
    }

    function edit($id)
    {
        $data = mysqli_query($this->conn, "SELECT * FROM products WHERE id='$id'");
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
        
        return $rows;
    }

    function update_data($id, $product_name, $category_id, $product_code, $deskripsi, $price, $unit, $discount_amount, $stock)
    {
        mysqli_query($this->conn, "UPDATE products SET `product_name`= '$product_name', `category_id` = '$category_id', 
        `product_code` = '$product_code', `deskripsi` = '$deskripsi', `price` = '$price', `unit` = '$unit', `discount_amount` = '$discount_amount',
        `stock` = '$stock' WHERE `products`.`id` = '$id'");
    }
    
    function hapus_data($id)
    {
        mysqli_query($this->conn, "DELETE FROM products WHERE `products`.`id` = '$id'");
    }
}

