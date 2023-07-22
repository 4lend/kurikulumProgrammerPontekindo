<?php

// 1.
echo "masukkan nama produk : ";
$produk = trim(fgets(STDIN));
echo strtoupper($produk) . PHP_EOL;

// 3.
$array = "Aqidah & Fiqih & Hadits & Tafsir & Tajwid & Adab";
print_r(explode('&', $array));

// 4.
$array = [-2,4,-18,9,0,21,-5];
rsort($array);
echo "berikut urutan array dari yang terbesar ke yang terkecil : \n";
print_r($array);
echo "\nlist array positif : \n";
var_dump(range($array[0, 23]));
# $positif = array_merge($array,range(0, 5));
# print_r(range($array[0, 23]));
# foreach (range($array) as $value){
#     echo $value;
# }
# print_r(in_array($array, range(0,3)));
# var_dump(in_array($array, range(0,21)));

# if($array >= [3]){
#     print_r(array_values($array));
#     # print_r($array);
# } else {
#     echo "hello";
# }
# var_dump($array);


# echo "\nlist array positif : \n";

?>