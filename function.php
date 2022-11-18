<?php

$conn = mysqli_connect("Localhost", "root", "", "php");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows= [];

    while($row = mysqli_fetch_assoc($result)){

        $rows[]=$row;

    }

    return $rows;
}

function tambah($data){
    global $conn;

    $nrp = htmlspecialchars($data["nrp"]) ;
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    $query = "INSERT INTO mahasiswa
    VALUES
    ('','$nama','$nrp','$email','$jurusan')
    ";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id =$id");

    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $id = $data["id"];
    $nrp = htmlspecialchars($data["nrp"]) ;
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    $query = "UPDATE mahasiswa SET
                nrp = '$nrp',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan'
                WHERE id = $id
                ";

    mysqli_query($conn,$query);

    return mysqli_affected_rows($conn);
}




?>