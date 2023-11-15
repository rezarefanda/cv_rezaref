<?php

include 'config.php';

if (isset($_POST['submit'])) {
    session_start();
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];
    $web = $_POST['web'];
    $pendidikan = $_POST['pendidikan'];
    $pengalaman_kerja = $_POST['pengalaman_kerja'];
    $keterampilan = $_POST['keterampilan'];
    $foto_path = $_POST['foto_path'];

    // Validasi data yang dibutuhkan
    if (empty($id)) {
        header('Location: register.php?error=NIM is required');
        exit;
    } elseif (empty($nama)) {
        header('Location: register.php?error=Nama is required');
        exit;
    } elseif (empty($email)) {
        header('Location: register.php?error=Email is required');
        exit;
    }

    $cek_user = mysqli_query($conn, "SELECT * FROM cv_data WHERE id = '$id'");
    $cek_jumlah = mysqli_num_rows($cek_user);

    if ($cek_jumlah > 0) {
        header('Location: register.php?error=NIM tersebut telah terdaftar');
        exit;
    }

    $insert_query = "INSERT INTO cv_data (id, nama, alamat, telepon, email, web, pendidikan, pengalaman_kerja, keterampilan, foto_path) VALUES ('$id', '$nama', '$alamat', '$telepon', '$email', '$web', '$pendidikan', '$pengalaman_kerja', '$keterampilan', '$foto_path')";

    if (mysqli_query($conn, $insert_query)) {
        echo "<script> 
			alert('NIM berhasil terdaftar');
			window.location = 'index.php';
			</script>";
    } else {
        echo 'Error: '.$insert_query.'<br>'.mysqli_error($conn);
    }
} else {
    echo 'Maaf ternyata tidak berhasil';
}
