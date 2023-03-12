<?php
# Sintaks Php

## Standar Output

// echo, print
// print_r()
// var_dump()

echo "Sanas Febriyan",
print "sanas Febriyan",
print_r("Sanas Febriyan"),

var_dump("Sanas Febriyan")
?>

<!-- 
## Penulisan Sintaks Php
1. Php di dalam
2. Html di dalam Php


# Variabel dan tipe data
3. Variabel
tidak boleh diawali dengan angka, tapi boleh mengandung angka
-->
<?php
$nama = "Sanas Febriyan";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Php Pemula</title>
  </head>
  <body>
    <h1>Halo, Selamat Datang <?php echo "Sanas Febriyan"?></h1>
    <p><?php echo "Ini adalah paragraf"?></p>

    <?php
    echo "<h1>Halo, selamat Datang Sanas Febriyan</h1>"
    ?>

    <h1>Halo, Salamat Datang <?php echo $nama; ?></h1>
  </body>
</html>

<!-- 
## Operator
4. Aritmatika
+ - * / %
 -->
<?php
$x=10;
$y=12;
echo $x * $y;



# Penggabung string / concatenation / concat
// .
$nama_depan = "Sanas";
$nama_belakang ="Febriyan";
echo $nama_depan . " " . $nama_belakang;

# Assignment
// =, +=, -=, *=, /=, %=, .=
$x=1;
$x=5;
echo $x;

$x=1;
$x+=5;
echo $x;

$nama = "Sanas";
$nama .=" ";
$nama .="Febriyan";
echo $nama;

# Perbandingan
// <, >, <=, >=, ==, !=
var_dump(1 < 5);
var_dump(1 == 5);
var_dump(1 == "1");

# identitas
// ===, !==
var_dump(1 === "1");

# logika
// &&, ||, !
$x=10;
var_dump($x < 20 && $x % 2 == 0);

$x=10;
var_dump($x < 20 && $x % 2 == 0);

$x=10;
var_dump($x < 20 || $x % 2 == 0);

## Pengulangan
// for, while, do.. while
// foreach : pengulangan khusus array
for($i=0; $i<3; $i++){
echo "Hello World<br>";
}
$i=0;
while($i<3){
  echo "Hello World<br>";
  $i++;
}
$i=0;
do{
  echo "Hello World<br>";
}while($i<3)
?>