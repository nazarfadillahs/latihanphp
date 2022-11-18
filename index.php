<?php
require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>
<div class="hero">
    <h1>Daftar Mahasiswa</h1>

        <a href="tambah.php">Tambah Data Mahasiswa</a></li>
    
</div>



<br><br>
<table border="1" cellpadding ="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Aksi</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>
    <?php $i=1 ;?>
    <?php foreach ($mahasiswa as $row) :?>

    <tr>
        <td><?= $i ?></td>
        <td>
            <div class="ubah"><a href="ubah.php?id=<?= $row["id"] ?>">Ubah</a></div><br>
            <div class="hapus"><a href="hapus.php?id=<?= $row["id"] ?>" onclick="return confirm('anda yakin?');">Hapus</a></div>
        </td>
        <td><?= $row["nrp"] ?></td>
        <td><?= $row["nama"] ?></td>
        <td><?= $row["email"] ?></td>
        <td><?= $row["jurusan"] ?></td>

    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
</table>

<div class="jarak"></div>
    
</body>
</html>