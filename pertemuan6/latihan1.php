<!-- <?php

//membuat array
$hari = array("senin","selasa","rabu");
$bulan = ["januari", "februari", "maret"];
$arr = [100,"teks",true];
//mmenampikan array versi debugging
var_dump($hari);
echo "<br>";
print_r($bulan);

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #BADA55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }

    </style>
</head>
<body>
    
<?php $angka = [1,2,3,4,5,6,7,8,9,0];?>

<?php foreach($angka as $a) : ?>

        <div class="kotak"><?= $a; ?></div>

<?php endforeach ?>


</body>
</html>