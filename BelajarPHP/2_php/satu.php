<?php
// $ = membuat variable
$nama = "PPKD Jakpus"; //varchar : kumpulan angka dan karakter lainnya.
$angkatan = 2025; //int : kumpulan angka
$tinggi_siswa = 168.3; //Float   
$true = true;
$false = false;

$nama_depan = "Bagas";
$nama_belakang = "Dwiprasandi";

// array
$keranjang = ['Salak, Mangga, Pepaya, Melon, Pisang, Rambutan'];


echo "<p> $nama</p>";
print "$nama" . "<br>";
print_r(value: $keranjang);
var_dump($true);
var_dump($false);

echo $nama_depan . " " . $nama_belakang;

echo "<br>";
echo "<br>";
echo "<br>";

echo "<h1>Constant Variable di php</h1>";

define("Mobil", "Honda Acura NSX");
echo Mobil;
