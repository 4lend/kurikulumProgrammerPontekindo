<?php

echo "############### CASHIER ###############\n";
echo "masukkan nama konsumen : ";
$nameKonsumen = trim(fgets(STDIN));
echo "Belanjaan1 : ";
$i1 = trim(fgets(STDIN));
echo "hargaBelanjaan1 : ";
$p1 = trim(fgets(STDIN));
echo "Belanjaan2 : ";
$i2 = trim(fgets(STDIN));
echo "hargaBelanjaan2 : ";
$p2 = trim(fgets(STDIN));
echo "Belanjaan3 : ";
$i3 = trim(fgets(STDIN));
echo "hargaBelanjaan3 : ";
$p3 = trim(fgets(STDIN));
$ap = (int) $p1 + $p2 + $p3;
echo "totalBelanjaan : Rp. $ap\n";
echo var_dump ($ap);

if ($ap >= 30000){
    echo "anda mendapatkan diskon belanja sebanyak Rp. 3000\n";
  } elseif ($ap >= 20000){
    echo "anda mendapatkan diskon belanja sebanyak Rp. 2000\n";
  } elseif ($ap >= 10000){
    echo "anda mendapatkan diskon belanja sebanyak Rp. 1000\n";
  } else {
    echo "terimakasih sudah berkunjung\n"
  }

?>
