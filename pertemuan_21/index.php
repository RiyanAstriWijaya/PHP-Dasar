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

    <link href='https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css' rel='stylesheet'/> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Halaman Admin</title>
    
    <script src="js/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="js/script.js"></script>

</head>
<body>

<a href="logout.php" class="btn btn-primary btn-md mt-2"><i class="bi bi-power"></i>Logout</a>

<h1 class="h1-in">Daftar Mahasiswa</h1>

<form action="" method="post" class="form-cari">
    <input type="text" name="keyword" size="30" autofocus 
            placeholder="Masukan keyword pencarian.." autocomplete="off" id="keyword">
    <button type="submit" name="cari" id="tombol-cari">Cari</button>
    <img src="img/loader.gif" class="loader">
</form>




<div class="container mt-3">
<a href="tambah.php" class="btn btn-primary btn-md mb-3"><i class="bi bi-plus-circle-fill"></i>Tambah Data</a>
<table class="table table-striped table-hover table-bordered">
    <tr class="table-dark">
        <th>No.</th>
        <th>Gambar</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Email</th>
        <th class="aksi">Aksi</th>
    </tr>

    <?php
        $no =1;
        foreach ($mahasiswa as $row) : ?>

    <tr>
        <td><?= $no ?></td>

        <td><img src="img/<?= $row["gambar"] ?>" width="50px" alt="error foto"></td>
        <td><?= $row["nim"] ?></td>
        <td><?= $row["nama"] ?></td>
        <td><?= $row["jurusan"] ?></td>
        <td><?= $row["email"] ?></td>

        <td class="aksi">
            <div class='row'>
                <div class='col d-flex justify-content-center'>
                    <a href="ubah.php?id=<?= $row["id"]; ?>" class='btn btn-sm btn-warning'><i class='bi bi-pencil-square'></i>Update</a> 
                </div>
                <div class='col d-flex justify-content-center'>
                    <a href="hapus.php?id=<?= $row["id"]; ?>"onclick="return confirm('apakah anda yakin ingin menghapus data ini?');" 
                        class='btn btn-sm btn-danger'><i class='bi bi-trash3'></i>Delete</a>
                </div>
            </div>
        </td>

    </tr>

    <?php
        $no++;
        endforeach; ?>
</table>
</div>
</body>
</html>