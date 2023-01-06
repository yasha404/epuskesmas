<?php
require '../config/connect.php';

if (isset($_POST['update-pasien'])) {
    $id = htmlspecialchars($_POST['id_pasien']);
    $nama = htmlspecialchars(trim($_POST['nama']));
    $alamat = htmlspecialchars(trim($_POST['alamat']));
    $nomor_hp = htmlspecialchars(trim($_POST['nomor_telepon']));
    $ttl = htmlspecialchars(trim($_POST['tanggal_lahir']));
    $gender = htmlspecialchars(trim($_POST['jenis_kelamin']));

    if (empty($nama) || empty($alamat) || empty($nomor_hp)) {
        echo "
        <script>
        setTimeout(function() {
            Swal.fire({
                title: 'Peringatan!',
                text: 'isi yg bener dong!',
                icon: 'error',
                timer: 2000,
                showCancelButton: false,
                showConfirmButton: false
            });
        });  
        </script>
        ";
    } else {
        $queryUpdate = "UPDATE pasien SET nama = '$nama', alamat = '$alamat', nomor_telepon = '$nomor_hp', tanggal_lahir = '$ttl', jenis_kelamin = '$gender' WHERE id_pasien = $id";
        $resultUpdate = mysqli_query($conn, $queryUpdate);
        echo "
        <script>
        setTimeout(function() {
            Swal.fire({
                title: 'Berhasil!',
                text: 'Data Berhasil DiSimpan!',
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

// kalau mau buat lagi tinggal ulangi codingan diatas ke bawah

// if (isset($_POST['update-medis'])) {}