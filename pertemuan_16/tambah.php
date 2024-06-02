<?php

session_start();

if( !isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}

include "functions.php";
//cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){


    //cek apakah data berhasil atau gagal di tambahkan
    if(tambah($_POST) > 0){
        echo" 
        <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    }else{
        echo" 
        <script>
            alert('data gagal ditambahkan!');
            document.location.href = 'index.php';
        </script>
        ";
    }
    // if(mysqli_affected_rows($conn) > 0 ) {
    //     echo "berhasil";
    // }else{
    //     echo "gagal";
    //     echo "<br>";
    //     echo mysqli_error($conn);
    // }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="nim">NIM : </label>
                <input type="text" name="nim" id="nim" required>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan" id="jurusan">
            </li>

            <li>
                <label for="gambar">Gambar : </label>
                <input type="file" name="gambar" id="gambar">
            </li>

            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email">
            </li>
            
            <li>
                <button type="submit" name="submit">Tambah data!</button>
            </li>
        </ul>

    </form>
</body>
</html>