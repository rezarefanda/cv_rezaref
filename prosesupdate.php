<?php

include 'config.php';

if (isset($_POST['id'])) {
    // Pastikan Anda telah memulai sesi sebelumnya
    session_start();

    // Ambil id dari sesi pengguna
    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];

        // Ambil data yang akan diperbarui dari formulir
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];
        $email = $_POST['email'];
        $web = $_POST['web'];
        $pendidikan = $_POST['pendidikan'];
        $pengalaman_kerja = $_POST['pengalaman_kerja'];
        $keterampilan = $_POST['keterampilan'];
        $foto_path = $_POST['foto_path'];

        // Buat pernyataan SQL UPDATE
        $sql = 'UPDATE cv_data SET nama=?, alamat=?, telepon=?, email=?, web=?, pendidikan=?, pengalaman_kerja=?, keterampilan=?, foto_path=? WHERE id=?';

        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssssssssi', $nama, $alamat, $telepon, $email, $web, $pendidikan, $pengalaman_kerja, $keterampilan, $foto_path, $id);

        if ($stmt->execute()) {
            session_start();

            session_unset();
            session_destroy();

            header('Location: index.php?error=Berhasil. Silahkan login lagi untuk pembaruan sesi!');
            exit;
        } else {
            exit('Gagal memperbarui profil: '.$stmt->error);
        }

        $stmt->close();
    } else {
        exit('Sesi tidak ditemukan. Pastikan Anda sudah login sebelum mengakses halaman ini.');
    }
} else {
    header('Location: update.php?error=Data tidak ditemukan'); // Handle jika 'submit' tidak dijalankan
    exit;
}
