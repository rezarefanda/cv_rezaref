<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
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

  .background{
    background-color: #ffffff;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
  }

  .paragraf{
    text-align: right;
    padding-top: 30px;
  }

  .mb-3 input{
    width: 600px;
  }
</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <form action="prosesregister.php" method="post">
        <div class="background">
          <h2 style="text-align: center;">Register</h2>
        <?php if (isset($_GET['error'])) { ?>
          <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
		<div class="mb-3">
          <input type="number" name="id" class="form-control" placeholder="Nomor Indeks Mahasiswa">
        </div>
		<div class="mb-3">
          <input type="teks" name="nama" class="form-control" placeholder="Nama Lengkap Anda">
        </div>
		<div class="mb-3">
          <input type="teks" name="alamat" class="form-control" placeholder="Alamat Lengkap Anda">
        </div>
		<div class="mb-3">
          <input type="number" name="telepon" class="form-control" placeholder="Nomor HP Anda">
        </div>
        <div class="mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email Anda">
        </div>
		<div class="mb-3">
          <input type="teks" name="web" class="form-control" placeholder="URL Website Anda">
        </div>
		<div class="mb-3">
          <input type="teks" name="pendidikan" class="form-control" placeholder="Pendidikan Anda">
        </div>
		<div class="mb-3">
          <input type="teks" name="pengalaman_kerja" class="form-control" placeholder="Pengalaman Kerja Anda">
        </div>
		<div class="mb-3">
          <input type="teks" name="keterampilan" class="form-control" placeholder="Keterampilan Anda">
        </div>
		<div class="mb-3">
          <input type="teks" name="foto_path" class="form-control" placeholder="Link Foto Anda">
        </div>
        <center><button type="submit" class="btn btn-primary" name="submit">Register</button></center>
        <div class="paragraf">
          <p>Sudah punya akun? Login <a href="index.php" class="btn btn-success">disini</a></p>
        </div>
        </div>

      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
