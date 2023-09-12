<?php

# echo "### MENU ###\n 1. Input Harga Belanjaan\n 2. Keluar";
# 
# $menu = trim(fgets(STDIN));
# if($menu == 1){
#   echo "Data Konsumen\n";
#   echo "Masukkan Nama Konsumen : ";
# } else ( $menu == 2 ){
#   echo "exit";
# }
# 
# $nama = trim(fgets(STDIN));
# 
# echo "Masukkan total belanja : ";
# $total = trim(fgets(STDIN));
# 
# if($total <= 5000 ){
#   echo "You Get FREE Candy\n";
# } elseif ($total <= 10000) {
#   echo "You Get FREE 1 Drink Sachet\n";
# } elseif ($total <= 50000) {
#   echo "You Get FREE Noodle\n";
# } elseif ($total <= 100000) {
#   echo "You On Fire Broo\n";
#   echo "Conratulations You get FREE Aoka Bread and Milk Sachets\n";
# } else {
#   echo "Arigatou Gozaimasu\n";
# }


## perhitungan sederhana dari denda yang akan diberikan karena telat mengembalikan buku yang dipinjam ##
echo "ketikkan nama : ";
$nama = trim(fgets(STDIN));
echo "ketikkan judul buku : ";
$buku = trim(fgets(STDIN));
echo "batas hari lama sewa buku : ";
$batas = trim(fgets(STDIN));
echo "jumlah hari sewa buku : ";
$hari = trim(fgets(STDIN));
$hargaSewa = 10000 * $hari;
$biayaDenda = 5000 * $hari;
$denda = $hari - $batas;
$total = $hargaSewa + $biayaDenda;

switch ("denda") {
  case $denda <= 7 : 
    echo "anda telat $denda hari, dikenakan denda sebanyak $total\n";
    break;
  case $denda <= 6 :
    echo "anda telat $denda hari, dikenakan denda sebanyak $total\n";
    break;
  case $denda <= 5 :
    echo "anda telat $denda hari, dikenakan denda sebanyak $total\n";
    break;
  case $denda <= 4 :
    echo "anda telat $denda hari, dikenakan denda sebanyak $total\n";
    break;
  case $denda <= 3 :
    echo "anda telat $denda hari, dikenakan denda sebanyak $total\n";
    break;
  case $denda <= 2 :
    echo "anda telat $denda hari, dikenakan denda sebanyak $total\n";
    break;
  case $denda <= 1 :
    echo "anda telat $denda hari, dikenakan denda sebanyak $total\n";
    break;
}

?>
