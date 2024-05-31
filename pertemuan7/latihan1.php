<?php
//variable scope / lingkuo variable

// $x = 10;
// function tampilx(){
//     global $x; //variable global
//     echo $x;
// }
// tampilx();

//varibale super global (merupakan array associative)
//$_GET
//$_POST
//$_SESSION
//$_COOKIE dll

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
    <title>GET</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <a href="latihan2.php?nama=<?=$mhs['nama']?> & nim=<?=$mhs['nim']?> & jurusan=<?=$mhs['jurusan']?>
            & email=<?=$mhs['email']?> & gambar=<?=$mhs['gambar']?> "> 
            <?= $mhs["nama"] ?></li></a>
        </ul>
    <?php endforeach ?>
</body>
</html>