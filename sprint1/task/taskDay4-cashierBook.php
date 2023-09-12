<?php

## perhitungan sederhana dari denda yang akan diberikan karena telat mengembalikan buku yang dipinjam ##
echo "ketikkan nama : ";
$nama = trim(fgets(STDIN));
echo "ketikkan judul buku : ";
$buku = trim(fgets(STDIN));
echo "batas hari penyewaan buku : ";
$batas = trim(fgets(STDIN));
echo PHP_EOL;
echo "$nama menyewa buku selama $batas hari\n";
echo "berapa lama total hari sewa buku : ";
$hari = trim(fgets(STDIN));
echo PHP_EOL;
echo "total $nama menyewa buku selama $hari hari\n";
$hargaSewa = 10000 * $hari;
$biayaDenda = 5000 * $hari;
$denda = $hari - $batas;
$total = $hargaSewa + $biayaDenda;

switch ("denda") {
  case $denda <= 7 : 
    echo "$nama telat $denda hari, dikenakan denda sebanyak $total\n";
    break;
  case $denda <= 6 :
    echo "$nama telat $denda hari, dikenakan denda sebanyak $total\n";
    break;
  case $denda <= 5 :
    echo "$nama telat $denda hari, dikenakan denda sebanyak $total\n";
    break;
  case $denda <= 4 :
    echo "$nama telat $denda hari, dikenakan denda sebanyak $total\n";
    break;
  case $denda <= 3 :
    echo "$nama telat $denda hari, dikenakan denda sebanyak $total\n";
    break;
  case $denda <= 2 :
    echo "$nama telat $denda hari, dikenakan denda sebanyak $total\n";
    break;
  case $denda <= 1 :
    echo "$nama telat $denda hari, dikenakan denda sebanyak $total\n";
    break;
}

?>
