<?php
//array : variable yang dapat memiliki banyak nilai & elemen pada array boleh memiliki tipe data yang berbeda

//array cara lama
$hari = array("senin","selasa","rabu");

//array cara baru
$bulan = ["januari","februari","maret"];
$arr1 = [123,"tulisan",false];

//menampilkan array
//var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

//menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

//menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jumat";
echo "<br>";
var_dump($hari);

?>