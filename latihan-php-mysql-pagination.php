<?php
session_start();

// cek session
if(!isset($_SESSION["login"])){
  header("Location: login.php");
  exit;
}

require 'functions.php';

// pagination
// konfigurasi
$jumlahDataPerhalaman = 2; 
$jumlahData = count(query($conn, "SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
// if(isset($_GET['halaman'])){
//   $halamanAktif = $_GET['halaman'];
// }else{
//   $halamanAktif = 1;
// }
$halamanAktif = (isset($_GET['halaman'])) ? $_GET['halaman'] : 1;
// algoritma halaman
$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman; 

$mahasiswa = query("SELECT * FORM mahasiswa LIMIT $awalData, $jumlahDataPerhalaman");

// tombol cari ditekan
if (isset($_POST["cari"])) {
  $mahasiswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php Mysql</title>
</head>
<body>
  <a href="logout.php">Logout</a>
  <h1>Daftar Mahasiswa</h1>
  <a href="tambah.php">Tambah data mahasiswa</a>
  <br>
  <form action="" method="post">
    <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan Keyword Pencarian.." autocomplete="off">
    <button type="submit" name="cari">Cari</button>
  </form>
  <br>
<!-- navigasi -->
  <?php if($halamanAktif > 1) :?>
    <a href="?halaman=<?=$halamanAktif - 1;?>">&laquo;</a>
  <?php endif?>
  <?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
    <?php if($i == $halamanAktif ) : ?>
      <a href="?halaman=<?= $i ?>" style="font-weight:bold; color:red;"><?= $i; ?></a>
    <?php else : ?>
      <a href="?halaman=<?= $i ?>"><?= $i; ?></a>
    <?php endif ?>
  <?php endfor ?>
  <?php if($halamanAktif < $jumlahHalaman) :?>
    <a href="?halaman=<?=$halamanAktif + 1;?>">&raquo;</a>
  <?php endif?>
  <br>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>No.</th>
      <th>Aksi</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
    </tr>

    <?php $i=1; ?>
    <?php foreach($mahasiswa as $row) :?>
    <tr>
      <td><?=$i?></td>
      <td>
        <a href="ubah.php?id=<?=$row["id"];?>">Ubah</a> | 
        <a href="hapus.php?id=<?=$row["id"];?>" onclick="return confirm('Yakin?')">Hapus</a>
      </td>
      <td><img src="img/<?=$row["gambar"];?>" width="50"></td>
      <td><?=$row["nrp"]?></td>
      <td><?=$row["nama"]?></td>
      <td><?=$row["email"]?></td>
      <td><?=$row["jurusan"]?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>
</html>