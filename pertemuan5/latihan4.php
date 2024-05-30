<?php

$mhs = [
    ["riyan", "2021888", "teknik informatika", "iyan@gmail.com"],
    ["adi", "2021877", "teknik informatika", "adi@gmail.com"],
    ["edoy", "2021866", "teknik informatika", "edoy@gmail.com"],
    ["asih", "2021899", "teknik informatika", "asih@gmail.com"]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array MultiDimensi</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mhs as $m) : ?>

    <ul>
        <li> Nama : <?= $m[0]; ?></li>
        <li> Nim : <?= $m[1]; ?></li>
        <li> Jurusan : <?= $m[2]; ?></li>
        <li> Email : <?= $m[3]; ?></li>
    </ul>
    <?php endforeach ?>

</body>
</html>