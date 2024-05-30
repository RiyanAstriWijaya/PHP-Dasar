<?php
$mahasiswa = [
    [
        "nama" => "riyan",
        "nim" => "2021520004",
        "jurusan" => "teknik informatika",
        "email" => "riyanmaba@gmail.com",
        "gambar" => "ryn1.JPG"
    ],
    [
        "nama" => "asih",
        "nim" => "2021520041",
        "jurusan" => "teknik informatika",
        "email" => "asih@gmail.com",
        "gambar" => "ryn2.jpg"
    ],
    [
        "nama" => "kholel",
        "nim" => "2021510001",
        "jurusan" => "teknik sipil",
        "email" => "kholel@gmail.com",
        "gambar" => "ryn3.jpg"
    ],
    [
        "nama" => "akbar",
        "nim" => "2021510021",
        "jurusan" => "teknik mesin",
        "email" => "akbar@gmail.com",
        "gambar" => "ryn4.jpg"
    ],
    [
        "nama" => "eko",
        "nim" => "2021510001",
        "jurusan" => "teknik sipil",
        "email" => "eco@gmail.com",
        "gambar" => "ryn5.jpg"
    ],
    [
        "nama" => "eka",
        "nim" => "2021510001",
        "jurusan" => "teknik mesin",
        "email" => "eka@gmail.com",
        "gambar" => "ryn6.jpg"
    ],
    [
        "nama" => "sugik",
        "nim" => "2021530005",
        "jurusan" => "teknik industri",
        "email" => "ugik@gmail.com",
        "gambar" => "ryn7.jpg"
    ]
    ];
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
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"] ?></li>
            <li>Nama : <?= $mhs["nim"] ?></li>
            <li>Nama : <?= $mhs["jurusan"] ?></li>
            <li>Nama : <?= $mhs["email"] ?></li>
        </ul>
    <?php endforeach ?>
</body>
</html>