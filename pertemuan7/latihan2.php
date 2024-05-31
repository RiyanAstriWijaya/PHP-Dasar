<?php
//cek apakah tidak ada data di di $_GET
if ( !isset($_GET["nama"]) ||
    !isset($_GET["nim"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["gambar"]) ) {
    //redirect
    header("Location: latihan1.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Detail mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

        <ul>
            <li>
                <img src="img/ryn1.jpg">
            </li>
            <li>Nama : <?= $_GET["nama"] ?></li>
            <li>Nama : <?= $_GET["nim"] ?></li>
            <li>Nama : <?= $_GET["jurusan"] ?></li>
            <li>Nama : <?= $_GET["email"] ?></li>
        </ul>

    <a href="latihan1.php">kembali</a>

</body>
</html>