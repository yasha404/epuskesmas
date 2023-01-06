<?php
error_reporting(0);
require '../../config/connect.php';

if ($idPasien = $_GET['id_pasien']) {
    mysqli_query($conn, "DELETE FROM pasien WHERE id_pasien = '$idPasien'");
    echo "
    <script>
    window.setTimeout(function() {
        window.location.replace('../pasien.php');
    }, 0);
    </script>
    ";
}

// ini juga sama tinggal nambahin if lagi dibawah buat delet
