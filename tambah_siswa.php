<?php
include '../config/config.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $tplahir = $_POST['tplahir'];
    $tglahir = $_POST['tglahir'];
    $alamat = $_POST['alamat'];
    $hobi = $_POST['hobi'];
    $cita_cita = $_POST['cita_cita'];
    $jum_saudara = $_POST['jum_saudara'];
    $idkelas = $_POST['idkelas'];
    $idagama = $_POST['idagama'];

    $sql = "INSERT INTO siswa (nama, tplahir, tglahir, alamat, hobi, cita_cita, jum_saudara, idkelas, idagama)
            VALUES ('$nama', '$tplahir', '$tglahir', '$alamat', '$hobi', '$cita_cita', '$jum_saudara', '$idkelas', '$idagama')";
    $query = mysqli_query($conn, $sql);
    
    if ($query) {
        header('Location: ../siswa.php?status=sukses');
    } else {
        header('Location: ../siswa.php?status=gagal');
    }
}
?>