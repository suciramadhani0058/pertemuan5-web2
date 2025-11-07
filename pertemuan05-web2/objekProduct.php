<?php
require_once "product.php";

//buat objek
$produk = new product("Apple","20000");
echo $produk ->getNama();
echo"<br>";
echo $produk ->getHarga();
?>