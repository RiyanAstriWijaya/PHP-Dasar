<?php
sleep(1);
include "../functions.php";

$keyword = $_GET["keyword"];

$query = "SELECT * FROM mahasiswa 
            WHERE 
                nim LIKE '%$keyword%' OR
                nama LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%' OR
                email LIKE '%$keyword%' 
            ";
$mahasiswa = query($query);
?>

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