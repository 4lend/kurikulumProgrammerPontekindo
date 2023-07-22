

<?php

// tugas mengingat materi kemarin
// buat array berisi produk fashion dengan id, nama barang, harga, jumlah stok.
// kemudian tampilkan dengan foreach.
# $barang = array ("baju == 5 stok => Rp.5000");
# foreach ($barang as $b => $p){
#   echo "$b = $p" . PHP_EOL;
# }

# $pakaian = ["baju" => 5000];
# 
# foreach ($pakaian as $list => $val) {
#   echo "$list => $val" . PHP_EOL;
# }

$a = array(
    "one" => 1,
    "two" => 2,
    "three" => 3,
    "seventeen" => 17
);

foreach ($a as $k => $v) {
    echo "$k => $v" . "\n";
}

echo "##########################################\n";
// manipulasi string

$string = "Hello World";
var_dump(strlen($string));
var_dump(str_word_count($string));
echo str_repeat($string,7);
// substr() = mengambil karakter dari string;
var_dump(substr($string,3,6));  // 6 adalah berapa banyak huruf yg akan ditampilkan setelah hurus ke 3

$number = 9_100_000;
var_dump(number_format($number, 0));
var_dump(number_format($number,0,",",".")) . PHP_EOL;

// curly brace tidak terbada di string
// sedangkan underscore tidak terbaca pada integer

$buku = "buku";
// menggunakan kurung kurawal (curly brace) pada variable didalam string
echo "saya sedang melakukan pem($buku)an\n";

// mengubah tipe data
$a = (int)"seratus";
$b = (string)100;
var_dump($a);
var_dump($b);

?>
