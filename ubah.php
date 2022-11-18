<?php
require 'function.php';

//ambil data dari url
$id = $_GET["id"];
//query data mahasiswa dari id
$mhs = query("SELECT * FROM mahasiswa WHERE id=$id")[0];

//cek tomob submit sudah ditekan atau belum
if(isset($_POST["submit"])){

    //cek apakah data berhasil diubah atau tidak
    if(ubah($_POST)>0){
        echo "
            <script>
            alert('data berhasil diubah');
            window.location = 'index.php';
            </script>
        ";
    }else{
        echo "
        <script>
            alert('data gagal diubah');
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
    <title>ubah Data</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    
<div class="hero">
    <h1>Tambah Data Mahasiswa</h1>
    
</div>

<form action="" method="POST">
    <ul>
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
        <li>
            <label for="nama">Nama</label><br>
            <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>" class="input">
        </li>
        <li>
            <label for="nrp">NRP</label><br>
            <input type="text" name="nrp" id="nrp" required  value="<?= $mhs["nrp"]; ?>" class="input">
        </li>
        <li>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="jurusan" required  value="<?= $mhs["email"]; ?>" class="input">
        </li>
        <li>
            <label for="jurusan">Jurusan</label><br>
            <input type="text" name="jurusan" id="jurusan" required  value="<?= $mhs["jurusan"]; ?>" class="input">
        </li>
        <li><button type="submit" name="submit" class="button">Submit</button></li>
    </ul>
</form>

</body>
</html>