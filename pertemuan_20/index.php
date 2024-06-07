<?php
session_start();

if( !isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}
include "functions.php";
$mahasiswa = query("SELECT * FROM mahasiswa");

//tombol cari di klil
if(isset($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        .loader{
            width: 100px;
            position: absolute;
            top: 118px;
            left: 215px;
            z-index: -1;
            display: none;
        }
    </style>

<script src="js/code.jquery.com_jquery-3.7.0.min.js"></script>
<script src="js/script.js"></script>

</head>
<body>

<a href="logout.php">Logout</a>

<h1>Daftar Mahasiswa</h1>


<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>

<form action="" method="post">
    <input type="text" name="keyword" size="30" autofocus 
    placeholder="Masukan keyword pencarian.." autocomplete="off" id="keyword">
    <button type="submit" name="cari" id="tombol-cari">Cari</button>
    <img src="img/loader.gif" class="loader">

</form>


<br>
<div id="container">
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php
    $no =1;
    foreach ($mahasiswa as $row) : 
    ?>

    <tr>
        <td><?= $no ?></td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> | 
            <a href="hapus.php?id=<?= $row["id"]; ?>"onclick="return confirm('yakinnn??');">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"] ?>" width="50px" alt="error foto"></td>
        <td><?= $row["nim"] ?></td>
        <td><?= $row["nama"] ?></td>
        <td><?= $row["email"] ?></td>
        <td><?= $row["jurusan"] ?></td>
    </tr>

    <?php
    $no++;
    endforeach;
    ?>

</table>
</div>


</body>
</html>