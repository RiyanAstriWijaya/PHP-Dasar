<?php

$mhs = ["riyan", "2021888", "teknik informatika", "iyan@gmail.com"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach ($mhs as $m) : ?>
            <li> <?= $m; ?> </li>
        <?php endforeach ?>
        
        <!-- atau
        <li><?= $mhs[0]; ?></li>
        <li><?= $mhs[1]; ?></li>
        <li><?= $mhs[2]; ?></li>
        <li><?= $mhs[3]; ?></li> -->
    </ul>

</body>
</html>