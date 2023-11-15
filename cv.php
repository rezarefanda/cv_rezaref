<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    ?>
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
        <div class="row">
            <div class="col font-weight-bold">Nama Lengkap</div>
            <div class="col"><?php echo $_SESSION['nama']; ?></div>
        </div>
        <div class="row">
            <div class="col font-weight-bold">Nomor Indeks Mahasiswa</div>
            <div class="col"><?php echo $_SESSION['id']; ?></div>
        </div>
        <div class="row">
            <div class="col font-weight-bold">Alamat</div>
            <div class="col"><?php echo $_SESSION['alamat']; ?></div>
        </div>
        <div class="row">
            <div class="col font-weight-bold">Nomor Telepon</div>
            <div class="col"><?php echo $_SESSION['telepon']; ?></div>
        </div>
        <div class="row">
            <div class="col font-weight-bold">Email</div>
            <div class="col"><?php echo $_SESSION['email']; ?></div>
        </div>
        <div class="row">
            <div class="col font-weight-bold">Website saya</div>
            <div class="col"><?php echo $_SESSION['web']; ?></div>
        </div>
        <div class="row">
            <div class="col font-weight-bold">Pendidikan saya</div>
            <div class="col"><?php echo $_SESSION['pendidikan']; ?></div>
        </div>
        <div class="row">
            <div class="col font-weight-bold">Pengalaman Kerja saya</div>
            <div class="col"><?php echo $_SESSION['pengalaman_kerja']; ?></div>
        </div>
        <div class="row">
            <div class="col font-weight-bold">Keterampilan saya</div>
            <div class="col"><?php echo $_SESSION['keterampilan']; ?></div>
        </div>
        <div class="row">
            <div class="col font-weight-bold">PAS Foto saya</div>
            <div class="col"><img src="<?php echo $_SESSION['foto_path']; ?>" style="width: auto; height: 250px;"></div>
        </div>
        <button type="submit" class="btn btn-success"><a href="update.php" style="color: white; text-decoration: none;">Update Data</a></button>
        <button type="submit" class="btn btn-primary"><a href="logout.php" style="color: white; text-decoration: none;">Logout</a></button>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

<?php
} else {
    header('Location: index.php?error=Belum login');
    exit;
}
?>