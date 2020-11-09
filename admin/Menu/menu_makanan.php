<?php
  require '../../functions.php';
  $makanan = query("SELECT * FROM menu_makanan");
  //Search
  if ( isset($_POST["cari"])) {
    $makanan = cari($_POST["keyword"]);
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/bootstrap.css">
  <link rel="stylesheet" href="../../style.css">
  <title>Web</title>
</head>
<body>
  <!-- Awal Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#"><img src="undiksha.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="Home.html">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="menu/makanan.php">Menu</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#">Lokasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
      </ul>
      <form class="form">
        <a class="btn btn-primary" href="Sign_In/Sign_in.php" role="button">Sign In</a>
        <a class="btn btn-primary" href="Sign_up/sign_up.php" role="button">Sign Up</a>
      </form>
    </div>
  </nav>
  <!-- Akhir Navbar -->
  <!-- Tabel -->
  <form action="" method="POST">
      <br><br>
      <h3 align="center">Daftar Menu</h3>
      <br>
      <center>
          <input type="text" name="keyword" class="w-25" class="form-control" autofocus placeholder="Search.." autocomplete="off"> 
          <button type="submit" name="cari" class="btn btn-outline-secondary">Search</button>
      </center>
  </form>
  <br>
    <table border="1" cellpadding="5" cellspacing="0" align="center">
      <tr>
        <th>No</th>
        <th>Gambar</th>
        <th>Makanan</th>
        <th>Harga</th>
        <th>Deskripsi</th>
        <th>Aksi</th>
      </tr>
      <?php $i=1; ?>
      <?php foreach($makanan as $row) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td><img src="../../img/<?= $row["img"]?>" width="100px"></td>
        <td><?= $row["makanan"];?></td>
        <td><?= $row["harga"];?></td>
        <td><?= $row["deskripsi"];?></td>
        <td>
          <a class="btn btn-danger" href="ubah.php?id=<?= $row["id"];?>">Ubah</a> |
          <a class="btn btn-danger" href="hapus.php?id=<?= $row["id"];?>">Hapus</a>
        </td>
      </tr>
      <?php $i++;?>
      <?php endforeach;?>
      <tr>
          <td colspan="6" align="center"><a class="btn btn-primary" href="tambah_menu_makanan.php">Tambahkan Menu</a></td>
      </tr>
    </table>
  <!-- Akhir Tabel -->
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>