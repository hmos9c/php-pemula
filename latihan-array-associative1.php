<!-- Array associative -->
<?php
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Array 3</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <?php foreach($mahasiswa as $mhs) : ?>
  <ul>
    <li>
      <img src="img/<?=$mhs["gambar"]?>">
    </li> 
    <li>Nama : <?=$mhs["nama"]?></li> 
    <li>NRP : <?=$mhs["nrp"]?></li> 
    <li>Jurusan : <?=$mhs["jurusan"]?></li> 
    <li>Email : <?=$mhs["email"]?></li> 
  </ul>
  <?php endforeach ?>
</body>
</html>