<?php
require_once "mobil.php";
require_once "mobilSport.php";

$brio = new mobil("Brio","Honda","2020");
echo $brio->infoMobil();

echo"<br><br>";
$lambo = new mobilSport("Lamborghini","Lamborghini","2022");
echo $lambo->infoMobil();
echo $lambo->aktifkanTurbo();
// $mobilSatu = new mobil("Brio", "Honda", "2018");
// $mobilDua = new mobil("Shogun", "Suzuki", "1990");

// echo "Nama : $mobilSatu->nama <br>";
// echo "Merk : $mobilSatu->merk <br>";
// echo "Tahun : $mobilSatu->tahun <br>";
// $mobilSatu->tambahKecepatan();

// echo "<br>";

// $mobilDua->nama = "Shogun";
// $mobilDua->merk = "Suzuki";
// $mobilDua->tahun = "1993";

// echo "Nama : $mobilDua->nama <br>";
// echo "Merk : $mobilDua->merk <br>";
// echo "Tahun : $mobilDua->tahun <br>";
// $mobilDua->tambahKecepatan();
?>