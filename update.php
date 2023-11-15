<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {
    ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
  /* Center the form */
  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }

  /* Style for the form background */
  .form-container {
    background: #f5f5f5;
    border: 1px solid #ddd;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  }
</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
        <form action="prosesupdate.php" method="post">
            <h2 style="text-align: center;">Update Data</h2>
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <div class="mb-3">
                <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?php echo $_SESSION['nama']; ?>">
            </div>
            <div class="mb-3">
                <input type="number" name="id" class="form-control" placeholder="Nomor Indeks Mahasiswa" value="<?php echo $_SESSION['id']; ?>">
            </div>
            <div class="mb-3">
                <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?php echo $_SESSION['alamat']; ?>">
            </div>
            <div class="mb-3">
                <input type="number" name="telepon" class="form-control" placeholder="Nomor HP" value="<?php echo $_SESSION['telepon']; ?>">
            </div>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" placeholder="Email anda" value="<?php echo $_SESSION['email']; ?>">
            </div>
            <div class="mb-3">
                <input type="teks" name="web" class="form-control" placeholder="Web anda" value="<?php echo $_SESSION['web']; ?>">
            </div>
            <div class="mb-3">
                <input type="text" name="pendidikan" class="form-control" placeholder="Pendidikan anda" value="<?php echo $_SESSION['pendidikan']; ?>">
            </div>
            <div class="mb-3">
                <input type="text" name="pengalaman_kerja" class="form-control" placeholder="Pengalaman kerja anda" value="<?php echo $_SESSION['pengalaman_kerja']; ?>">
            </div>
            <div class="mb-3">
                <input type="text" name="keterampilan" class="form-control" placeholder="Keterampilan anda" value="<?php echo $_SESSION['keterampilan']; ?>">
            </div>
            <div class="mb-3">
                <input type="teks" name="foto_path" class="form-control" placeholder="URL Foto anda" value="<?php echo $_SESSION['foto_path']; ?>">
            </div>
            <center><button type="submit" class="btn btn-primary">Update Data</button></center>
        </form>
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
