<?php
## Variable Scope / lingkup variabel
$x=10;
function tampilX(){
  global $x;
  echo $x;
}
tampilX();

## Superglobals
// variable global  milik php
// merupakan array associative
// $_GET, $_POST, $_REQURST, $_SESSION, $_COOKIE, $_SERVER, $_ENV

# $_GET
$mahasiswa = [
  [
    "nama" => "Sanas Febriyan",
    "nrp" => "20191301027",
    "jurusan" => "Teknik Informatika",
    "email" => "hmos9c@gmail.com",
    "gambar" => "1.png"
  ],
  [
    "nama" => "Sanas",
    "nrp" => "20191301027",
    "jurusan" => "Teknik Informatika",
    "email" => "hmos9c@gmail.com",
    "gambar" => "2.png"
  ],
];

// $_GET["nama"]="Sanas Febriyan";
// var_dump($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
  <?php foreach($mahasiswa as $mhs) : ?>
  <ul>
    <li>
      <img src="img/<?=$mhs["gambar"]?>">
    </li> 
    <li>
      <a href="latihan-get-post2.php?nama=<?=$mhs['nama']?>&nrp<?=$mhs['nrp']?>&jurusan<?=$mhs['jurusan']?>&email<?=$mhs['email']?>&gambar<?=$mhs['gambar']?>"> Nama : <?=$mhs["nama"]?></li></a>  
  </ul>
  <?php endforeach ?>
</body>
</html>