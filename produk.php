<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk Page</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/produk.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="product-container">
    <?php

$produk = array(
    array(
        "nama" => "Ayam Geprek",
        "harga" => 15000,
        "deskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "gambar" => "images/111.jpg" 
    ),
    array(
        "nama" => "Bakso",
        "harga" => 50000,
        "deskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "gambar" => "images/22.jpg"
    ),
    array(
        "nama" => "Infus Water",
        "harga" => 10000,
        "deskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "gambar" => "images/33.jpg"
    ),
    array(
        "nama" => "Jus Alpukat",
        "harga" => 20000,
        "deskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "gambar" => "images/44.jpg"
    ),
    array(
        "nama" => "koloke",
        "harga" => 25000,
        "deskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "gambar" => "images/55.jpg"
    ),
    array(
        "nama" => "Rendang",
        "harga" => 100000,
        "deskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "gambar" => "images/66.jpg"
    ),
    array(
        "nama" => "Soto Ayam",
        "harga" => 20000,
        "deskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "gambar" => "images/77.jpg"
    ),
    array(
        "nama" => "Sate Ayam",
        "harga" => 30000,
        "deskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "gambar" => "images/88.jpg"
    ),
    array(
        "nama" => "Mie Ayam",
        "harga" => 20000,
        "deskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "gambar" => "images/99.jpg"
    ),
    array(
        "nama" => "Mille Crepes",
        "harga" => 20000,
        "deskripsi" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "gambar" => "images/10.jpg"
    ),
    
);

foreach($produk as $item) {
    echo "<div class='product'>";
    echo "<img src='{$item['gambar']}' alt='{$item['nama']}'>";
    echo "<h3>{$item['nama']}</h3>";
    echo "<p>Harga: Rp.{$item['harga']} </p>";
    echo "<p>{$item['deskripsi']}</p>";
    echo "</div>";
}

?>
</div>
</body>
</html>