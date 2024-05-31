<?php
include "functions.php";
$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
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
            <a href="">ubah</a> | 
            <a href="">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"] ?>" width="50px" alt="error foto"></td>
        <td><?= $row["nama"] ?></td>
        <td><?= $row["email"] ?></td>
        <td><?= $row["jurusan"] ?></td>
    </tr>

    <?php
    $no++;
    endforeach;
    ?>

   

</table>
    

</body>
</html>