<?php

# // 1.
# echo "masukkan nama produk : ";
# $produk = trim(fgets(STDIN));
# echo strtoupper($produk) . PHP_EOL;
# 
# // 3.
# $array = "Aqidah & Fiqih & Hadits & Tafsir & Tajwid & Adab";
# print_r(explode('&', $array));

$wheels = ['bicycle' => 2, 'car' => 4];

// Foreach loops can iterate over arrays
foreach ($wheels as $wheel_count) {
    echo $wheel_count;
} // Prints "24"

echo "\n";

// 4.
$array = [-2,4,-18,9,0,21,-5];
rsort($array);
echo "berikut urutan array dari yang terbesar ke yang terkecil : \n";
print_r($array);
print_r(array_slice($array,0,3));
# foreach($array as $key => $value){
#     if($value >= 0){
#         echo "positive";
#         echo (min($array)). PHP_EOL;
#         # return true;
#     } else {
#         echo "false". PHP_EOL;
#         return false;
#     }
# }
# echo "\nlist array positif : \n";
# var_dump(range($array[0, 23]));

echo "positif\n";
sort($array);
foreach ($array as $key1 => $value1){
    if($value1 > 0){
        echo "$value1\n";
    }
}
echo PHP_EOL;

echo "negatif\n";
sort($array);
foreach ($array as $key => $value){
    if($value < 0){
        echo "$value\n";
    }
}
echo PHP_EOL;

?>