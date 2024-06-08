<?php
session_start();

if( !isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}
include "functions.php";
//cek apakah tombol submit sudah ditekan atau belum
//ambil data di URL
$id = $_GET["id"];
//query data mhs berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
if(isset($_POST["submit"])){
    //cek apakah data berhasil atau gagal diubah
    if(ubah($_POST) > 0){
        echo" 
        <script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php';
        </script>
        ";
    }else{
        echo" 
        <script>
            alert('data gagal diubah!');
            document.location.href = 'index.php';
        </script>
        ";
    }
}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Update data mahasiswa</title>
</head>
<body>
<div class="w-50 mx-auto border p-3 mt-5"> 
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <input type="hidden" name="gambarlama" value="<?= $mhs["gambar"]; ?>">
        <ul>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" 
                value="<?= $mhs["nim"]; ?>" class="form-control" readonly>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" value="<?= $mhs["nama"]; ?>" class="form-control" required>
            </li>
            <li>
                <label for="jurusan">Jurusan</label>
                    <select name="jurusan" id="jurusan" class="form-select" required>
                        <option>Pilih Jurusan</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Arsitek">Teknik Arsitek</option>
                        <option value="Teknik Sipil">Teknik Sipil</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Teknik Elektro">Teknik Elektro</option>
                    </select>
            </li>
            <li>
                <label for="gambar">Gambar : </label> <br>
                <img src="img/<?= $mhs['gambar'] ?>" width="50"> <br>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" value="<?= $mhs["email"]; ?>" class="form-control" required>
            </li>
            <li>
                <button type="submit" name="submit" class="btn btn-success mt-3">Update data!</button>
            </li>
        </ul>
    </form>
</div>
</body>
</html>