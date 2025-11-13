<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PHP Dasar</title>
    </head>
    <body>
        <h1>Belajar PHP Dasar</h1>
        <?php
        echo "Hello World";
        ?>
        <h2>Menggunakan Variable</h2>
        <?php
        $nim = "312410496";
        $nama = 'Sayyid Sulthan Abyan';
        echo "NIM : " . $nim . "<br>";
        echo "Nama : $nama";
        ?>
        <h2>predefine Variable</h2>
        <?php    
        echo 'Selamat Datang ' . $_GET['nama'];
        ?>
    </body>
</html>