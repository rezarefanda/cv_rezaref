<?php

session_start();
include 'config.php';

if (isset($_POST['id']) && isset($_POST['email'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $id = validate($_POST['id']);
    $email = validate($_POST['email']);

    if (empty($id)) {
        header('Location: index.php?error=NIM is required');
        exit;
    } elseif (empty($email)) {
        header('Location: index.php?error=Email is required');
        exit;
    } else {
        $sql = "SELECT * FROM cv_data WHERE id='$id' AND email='$email'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['id'] === $id && $row['email'] === $email) {
                $_SESSION['id'] = $row['id'];
                $_SESSION['nama'] = $row['nama'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['alamat'] = $row['alamat'];
                $_SESSION['telepon'] = $row['telepon'];
                $_SESSION['web'] = $row['web'];
                $_SESSION['pendidikan'] = $row['pendidikan'];
                $_SESSION['pengalaman_kerja'] = $row['pengalaman_kerja'];
                $_SESSION['keterampilan'] = $row['keterampilan'];
                $_SESSION['foto_path'] = $row['foto_path'];

                header('Location: cv.php');
                exit;
            } else {
                header('Location: index.php?error=Data ini belum terdaftar');
                exit;
            }
        } else {
            header('Location: index.php?error=Data ini belum terdaftar');
            exit;
        }
    }
} else {
    header('Location: index.php');
    exit;
}
