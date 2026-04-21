<?php

Include "koneksi.php";

// Mendapatkan data dari form

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$hp = $_POST['no_hp'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];

$sql = "INSERT INTO mahasiswa (nim, nama, alamat, no_hp, jenis_kelamin, jurusan) VALUES ('$nim', '$nama', '$alamat', '$hp', '$jenis_kelamin', '$jurusan')";

if (mysqli_query($link, $sql)) {
    echo "Data berhasil disimpan";
} else {
    header("location: data.php");
    //header("location: form_tambah.php");
}

?>