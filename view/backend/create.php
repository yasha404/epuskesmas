<?php
require '../config/connect.php';

if (isset($_POST['insert-pasien'])) {
    $nama = htmlspecialchars(trim($_POST['nama']));
    $alamat = htmlspecialchars(trim($_POST['alamat']));
    $nomor_hp = htmlspecialchars(trim($_POST['nomor_telepon']));
    $ttl = htmlspecialchars(trim($_POST['tanggal_lahir']));
    $gender = htmlspecialchars(trim($_POST['jenis_kelamin']));

    if (empty($nama)) {
        echo "
        <script>
        setTimeout(function() {
            Swal.fire({
                title: 'Peringatan!',
                text: 'isi yang bener dong!',
                icon: 'error',
                timer: 2000,
                showCancelButton: false,
                showConfirmButton: false
            });
        });  
        </script>
        ";
    } else {
        mysqli_query($conn, "INSERT INTO pasien (nama, tanggal_lahir, jenis_kelamin, nomor_telepon, alamat) VALUES ('$nama', '$ttl', '$gender', '$nomor_hp', '$alamat')");
        echo "
        <script>
        setTimeout(function() {
            Swal.fire({
                title: 'Berhasil!',
                text: 'yey berhasil!',
                icon: 'success',
                showCancelButton: false,
                showConfirmButton: false
            });
        });  
        window.setTimeout(function(){ 
            window.location.replace('pasien.php');
        },2000);
        </script>
        ";
    }
}
