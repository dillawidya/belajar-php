<?php
$hostname = "127.0.0.1";
$username = "root"; 
$password = ""; 
$database = "pos_shop";


$con = mysqli_connect($hostname, $username, $password, $database);
if (!$con) {
    die ('koneksi gagal : '. mysqli_connect_error());
    
}


//$conn = new mysqli($hostname, $username, $password, $database);


//if ($conn->connect_error) {
  //  die("Koneksi gagal OOP: " . $conn->connect_error);
//}
//echo "Koneksi berhasil OOP";
//?>