
<?php

// tipe data array
// array numeric -> indexnya berupa angka yang dimana dimulai dari angka 0

$array = ["string",321,true,null,];
var_dump($array);
echo $array[2];
echo PHP_EOL;

// array assosiatif -> indexnya / array key bisa kita atur sendiri
// array assosiatif -> Map di indexnya bisa diatur
$arrayAssoc = array(
  "pertama" => "awaludin",
  "kedua" => "akhirudin",
  "pertama" => 77.2,
  55 => "akhirudin",
);

// var_dump($arrayAssoc);
echo $arrayAssoc["kedua"];
echo PHP_EOL;

// array didalam array
$al = array(
  "id" => "4lend",
  "name" => "syifa",
  "age" => 22,
  "address" => [
    "city" => "Surakarta",
    "country" => "Indonesia",
    "region" => [
      "laweyan",
      "mojosongo",
      "jongke",
    ]
  ]
);
echo $al["address"]["region"][2];
echo PHP_EOL;
echo PHP_EOL;

// penugasan aritmatika
$angka1 = 2;
$angka2 = 4;
echo $angka1 %= $angka2;
echo PHP_EOL;

// ambil input lewat cli / terminal
// trip -> fungsi bawaan php untuk menghapus spasi pada awal dan akhir data
$misal = " faqih ";
$misal = " faqih \n ";
echo trim($misal);
// fgets adalah funsi untuk mengembil inputan dari cli / terminal
// STDIN adalah standar input -> tempat untuk menyimpan data sebelum ditampilkan

echo "---------menghitung luas persegi-----------", PHP_EOL;
$sisi = trim(fgets $STDIN);
echo $sisi;
$luas = $sisi * $var;
echo " Luas ; $Luas" . PHP_EOL;
echo "Luas : sisi * sisi\n Luas : $sisi * $var"

// https://youtube.com/live/LXNf4pm7lU0?feature=share

?>
