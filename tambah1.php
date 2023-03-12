<?php
// koneksi
$conn = mysqli_connect("localhost","root","","phppemula");
// cek apakah tombol submit sudah ditekan atau belum
if(isset($_POST["submit"])){
  // ambil data dari tiap elemant dalam form
  $nrp = $_POST['nrp'];
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $jurusan = $_POST['jurusan'];
  $gambar = $_POST['gambar'];

  // query insert data
  $query = "INSERT INTO mahasiswa VALUES ('','$nrp', '$nama', '$email', '$jurusan', '$gambar')";
  mysqli_query($conn, $query);
  // cek apakah data berhasil di tambahkan atau tidak
  if(mysqli_affected_rows($conn)>0){
    echo "berhasil";
  }else{
    echo"gagal";
    echo"<br>";
    echo mysqli_error($conn);
  }
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah data mahasiswa</title>
</head>
<body>
  <h1>Tambah data mahasiswa</h1>
  <form action="" method="post">
    <ul>
      <li>
        <label for="nrp">NRP</label>
        <input type="text" name="nrp" id="nrp" required>
      </li>
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" required>
      </li>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" required>
      </li>
        <label for="jurusan">Jurusan</label>
        <input type="text" name="jurusan" id="jurusan" required>
      </li>
        <label for="gambar">Gambar</label>
        <input type="text" name="gambar" id="gambar">
      </li>
      <li>
        <button type="submit" name="submit">Tambah Data</button>
      </li>
    </ul>
  </form>
</body>
</html>