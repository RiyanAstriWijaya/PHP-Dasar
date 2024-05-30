<?php
//variabel dan tipedata
//tidak boleh diawali angka tapi boleh mengandung angka

//operator aritmatika
// - + * / %

//operator assignment
// =, +=, -+, *=, /=, %=

//operator perbandingan
// <, >, <=, >=, ==, !=

//operator identitas
// ===, !==

//operator logika
// $$, ||, !
$x = 10;
var_dump($x < 20 && $x % 2 == 0);

//penulisan sintaks php
//1.php dalam html
//2.html dalam php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat datang <?= "Riyan" ?></h1>
    <p><?= "php dalam html" ?></p>
</body>
</html>