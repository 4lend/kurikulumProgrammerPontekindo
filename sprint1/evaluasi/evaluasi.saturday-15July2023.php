<?php
// 1. perbedaan antara == dan != 
// == : sama dengan
// != : tidak sama dengan
// contoh,
## $a = 10;
## var_dump($a == 10);
## var_dump($a != 10);
# $a = 10;
# $a == 10;
# var_dump((bool) $a);
# echo PHP_EOL;
# $a != 10;
# var_dump((bool) $a);
# var_dump ($a);
# echo PHP_EOL;

// 2. perbedaan variable dengan constanta 
//    variable adalah nilai mutable ( dapat dirubah ) yang kita berikan pada huruf / karakter tertentu, sedangkan
//    constanta adalah nilai immutable ( tidak dapat dirubah ) yang kita berikan pada huruf / karakter tertentu yang kita deklarasikan.
// contoh, 
## define("NAME", "budi");
## $y = "agung";
## echo NAME . $y;
## echo PHP_EOL;
## $y = "agus";
## echo NAME . $y;
## echo PHP_EOL;
// disini jika kita ingin merubah nilai dari variable NAME akan terjadi error karena variable NAME sudah menjadi immutable / tidak bisa dirubah, sedangkan untuk variable $y bisa dirubah dari yang awalnya agus menjadi agung.

// 3. membuat daftar teman satu divisi dengan multidimensi / array didalam array
echo PHP_EOL;
$fr = array (
  array ( "hafidz", 18, "pontianak" ),
  array ( "hanif", 17, "pagar alam" ),
  array ( "danu", 17, "jambi" ),
  array ( "faqih", 17, "jogja" ),
  array ( "fandy", 23, "purbalingga" ),
  array ( "syifa", 22, "surakarta" ),
);
echo $fr[5][2];
echo PHP_EOL;

// 4. membuat operator penugasan ...
// tadi ga jadi, time out brooh...


?>
