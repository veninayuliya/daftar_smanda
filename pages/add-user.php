<?php
session_start();
include '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tambah User</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/modern-business.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand">Kelola User</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="kelola-user.php">Kelola</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="../logout.php">Logout</a></li> 
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-md-6"><br>
        <h2>Tambah Data User</h2><br><br>
        <form method="post">
            <div class="form-grup">
                <label>Email</label><br>
                <input type="email" name="email" class = "form-control" placeholder="Masukkan email" required><br>
            </div>
            <div class="form-grup">
                <label>Password</label><br>
                <input type="password" name="password" class = "form-control" placeholder="Masukkan password" required><br>
            </div>
            <div class="form-grup">
                <label>Nama</label><br>
                <input type="text" name="nama" class = "form-control" placeholder="Masukkan nama" required><br>
            </div>
            <div class="form-grup">
                <label>Telepon</label><br>
                <input type="text" name="telepon" class = "form-control" placeholder="Masukkan no.telepon" required>
            </div>
            <div class="form-group">
                <label>Roles</label>
                <select type="text" name="roles" class="form-control" required>
                <option>User</option>
                <option>Administrator</option>
                </select>
                <br>
            </div>
		<button class="btn btn-primary" name="tambah">Tambah</button>
        </form>
        <br><br><br>
        <?php
        if(isset(($_POST['tambah'])))
        {
            mysqli_query($db,"INSERT INTO users (email_users, password_users, nama, telepon, roles) VALUES ('$_POST[email]','$_POST[password]','$_POST[nama]','$_POST[telepon]','$_POST[roles]')");	

            echo "<script>alert('Data user telah ditambahkan');</script>";
            echo "<script>location='kelola-user.php';</script>";
        }
        ?>

      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

</body>

</html>