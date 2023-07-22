<?php

// buat inputan dinammis yg nantinya ketika di echo huruf pertamanya kapital dengan output setiap kata huruf awalnya kapital kemudian nanti ada harga dengan output rupiah
// produk - deskripsi - harga

# $barang1 = "baju";
# $deskripsiBarang1 = "baju ini nyaman";
# $hargaBarang1 = 5000;

balik:
echo ucwords("input nama barang : ");
$barang1 = trim(fgets(STDIN));
echo ucwords($barang1  . PHP_EOL);

# echo ucwords("input deskripsi barang : ");
# $deskripsiBarang1 = trim(fgets(STDIN));
echo ucwords("ini adalah $barang1 \n");

# if(is_numeric($barang1) || is_numeric($deskripsiBarang1)){
#   echo "masukkkan input yg benar \n";
#   goto balik;
# } 

harga:
echo ucwords("input harga barang : ");
# $hargaBarang1 = trim(fgets(STDIN)) . PHP_EOL;
$hargaBarang1 = number_format . trim(fgets(STDIN)) . PHP_EOL;
$hargaBarang1 = number_format($hargaBarang1,0,"",".");

if(is_numeric($hargaBarang1)){
  $harga=number_format($hargaBarang1,0,"",".");
  echo "harga barang : $hargaBarang1";
} else {
    echo "masukkkan input harga yg benar \n";
    goto harga;
}

echo ucwords("harga $barang1 ini adalah Rp.$hargaBarang1 \n");



echo "manipulasi array";
// manipulasi array
$array1 = ["buku", "pensil", "pulpen", "penghapus", "penggaris"];
$array2 = 
  "merah" => "apel",
  "kuning" => "pisang",
  "hijau" => "mangga",


?>
