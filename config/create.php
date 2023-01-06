<?php
require 'connect.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nomor_hp = $_POST['nomor_telepon'];
$ttl = $_POST['ttl'];
$gender = $_POST['gender'];

$query = "INSERT INTO pasien(nama, tanggal_lahir, jenis_kelamin, nomor_telepon, alamat) VALUES ('$nama', '$ttl', '$gender', '$nomor_hp', '$alamat')";

if(mysqli_query($conn, $query)){
    // echo "<script>alert('Data berhasil ditambahkan!');</script>";
    header('location: ../view/pasien.php');
} else {
    echo "Error : ". $query . "<br>" . mysqli_error($conn);
}