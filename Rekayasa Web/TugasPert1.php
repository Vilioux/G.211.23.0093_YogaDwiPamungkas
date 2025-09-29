<?php
// Yoga Dwi Pamungkas
// G.211.23.0093
// Tugas Praktikum Rekayasa Web Pert 1

// 1. Buat sebuah variabel array, lalu encode ke format JSON.
$datadiri = [
    "nama" => "Bita",
    "umur" => 19,
    "kota" => "Surabaya",
    "aktif" => "Aktif"
];
echo json_encode($datadiri);
echo "<br>";
echo "<br>";

// 2. Buat sebuah variabel yang berisi json, lalu decode variabel tersebut ke dalam bentuk PHP
// Object dan PHP Array, kemudian akses nilai pada variabel hasil decode tersebut masingmasing.
$json_data = '{"nama":"Yoga","umur":18,"kota":"Trenggalek"}';
$dataObj = json_decode($json_data);

echo "Hasil Decode ke Object";
echo "<br>";
echo "Nama: " . $dataObj->nama . "<br>";
echo "Kota: " . $dataObj->kota . "<br>";

$dataArr = json_decode($json_data, true);

echo "Hasil Decode ke Array";
echo "<br>";
echo "Nama: " . $dataArr['nama'] . "<br>";
echo "Umur: " . $dataArr['umur'] . "<br>";
?>


