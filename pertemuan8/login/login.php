<?php
//cek apakah tombol submit sudah tekan apa belom
if( isset($_POST["masuk"]) ) {
    //cek username dan pass
    if( $_POST["username"] == "admin" && $_POST["pass"] == "123")  {
        //jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    }else{
        $error = true;
    //jika salah, tampilkan kesalahan 
    }
    
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>

<?php if( isset($error)) : ?>
    <p style="color : red; font-style :italic;">username / password salah!</p>
<?php endif ?>

<h1>Login Admin</h1>

<ul>
<form action="" method="POST">
    <li>
        <label for="username"> Masukan Nama : </label>
        <input type="text" name="username" id="username">
    </li>
    <li>
        <label for="pass"> Masukan Password : </label>
        <input type="password" name="pass" id="pass">
    </li>
        <input type="submit" name="masuk" value="login">

</ul>

</form>
</body>
</html>