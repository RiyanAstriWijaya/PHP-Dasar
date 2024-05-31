<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    
<?php if( isset($_POST["masuk"]) ) : ?>
<h1>Halo,Selamat datang <?= $_POST["username"] ?></h1>
<?php endif ?>

<form action="" method="POST">
    <label for="username"> Masukan Nama : </label>
    <input type="text" name="username" id="username">
    <br>
    <label for="pass"> Masukan Password : </label>
    <input type="password" name="pass" id="pass">
    <br>
    <input type="submit" name="masuk" value="login">
</form>

</body>
</html>