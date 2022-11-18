<?php
require 'function.php';
//cek tomob submit sudah ditekan atau belum
if(isset($_POST["submit"])){

    //cek apakah data berhasil dikirim atau tidak
    if(tambah($_POST)>0){
        echo "
            <script>
            alert('data berhasil ditambahkan');
            window.location = 'index.php';
            </script>
        ";
    }else{
        echo "
        <script>
            alert('data gagal ditambahkan');
            window.location = 'index.php';
        </script>
        ";
    }
   
 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
<div class="hero">
    <h1>Tambah Data Mahasiswa</h1>
    
</div>
<form action="" method="POST">
    <ul>
        <li>
            <label for="nama">Nama</label><br>
            <input type="text" name="nama" id="nama" required class="input" autocomplete="off" placeholder="Isi nama anda">
        </li>
        <li>
            <label for="nrp">NRP</label><br>
            <input type="text" name="nrp" id="nrp" required class="input" autocomplete="off" placeholder="Isi nrp anda">
        </li>
        <li>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="jurusan" required class="input" autocomplete="off" placeholder="Isi email anda">
        </li>
        <li>
            <label for="jurusan">Jurusan</label><br>
            <input type="text" name="jurusan" id="jurusan" required class="input" autocomplete="off" placeholder="Isi jurusan anda">
        </li>
        <li><button type="submit" name="submit" class="button">Submit</button></li>
    </ul>
</form>

</body>
</html>