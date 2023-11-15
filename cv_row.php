<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profil Anda</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        .font-weight-bold {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container text-center mt-5">
        <h1 class="mb-4">Profil Anda</h1>
        <?php
        include 'config.php';

        $query = 'SELECT * FROM cv_data';
        $result = mysqli_query($conn, $query);

        if (!$result) {
            exit('Error: '.mysqli_error($conn));
        }

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            echo '<div class="row">';
            echo '<div class="col font-weight-bold">Nama Lengkap</div>';
            echo '<div class="col">'.$row['nama'].'</div>';
            echo '</div>';
            echo '<div class="row">';
            echo '<div class="col font-weight-bold">Nomor Indeks Mahasiswa</div>';
            echo '<div class="col">'.$row['id'].'</div>';
            echo '</div>';
            echo '<div class="row">';
            echo '<div class="col font-weight-bold">Alamat</div>';
            echo '<div class="col">'.$row['alamat'].'</div>';
            echo '</div>';
            echo '<div class="row">';
            echo '<div class="col font-weight-bold">Nomor Telepon</div>';
            echo '<div class="col">'.$row['telepon'].'</div>';
            echo '</div>';
            echo '<div class="row">';
            echo '<div class="col font-weight-bold">Email</div>';
            echo '<div class="col">'.$row['email'].'</div>';
            echo '</div>';
            echo '<div class="row">';
            echo '<div class="col font-weight-bold">Pendidikan saya</div>';
            echo '<div class="col">'.$row['pendidikan'].'</div>';
            echo '</div>';
            echo '<div class="row">';
            echo '<div class="col font-weight-bold">Pengalaman Kerja saya</div>';
            echo '<div class="col">'.$row['pengalaman_kerja'].'</div>';
            echo '</div>';
        } else {
            echo 'Tidak ada data yang ditemukan.';
        }

        mysqli_close($conn);
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
