<?php require 'connect.php'; 

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nomor_hp = $_POST['nomor_telepon'];
    $ttl = $_POST['ttl'];
    $gender = $_POST['gender'];

    $queryUpdate = "UPDATE pasien SET nama = '$nama', alamat = '$alamat', nomor_telepon = '$nomor_hp', ttl = '$ttl', jenis_kelamin = '$gender' WHERE id_pasien = $id";
    $resultUpdate = mysqli_query($conn, $queryUpdate);
    if ($resultUpdate) {
        header('Location: ../pasien.php');
    } else {
        echo "Gagal";
    }
}
?>

