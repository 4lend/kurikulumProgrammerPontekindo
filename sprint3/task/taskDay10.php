<?php

// 1.
# $count = function ($i){
#     # $i = trim(fgets(STDIN));
#     return strlen($i);
# };
# $i = trim(fgets(STDIN));
# echo $count($i);
# # $count = $l;

# $count = function(){
#     echo "input data : ";
#     $input = trim(fgets(STDIN));
#     echo "jumlah karakter : ". strlen($input). PHP_EOL;
# };
# $count();


# // 2.
# function check($n){
#     foreach ($n as $n){
#         if($n % 2 == 0){
#             echo "$n";            
#         } else{
#             echo "$n";
#         }
#     }
# }
# 
#     # if($n % 2 == 0){
#     #     # echo $n. PHP_EOL;
#     #     var_dump is_bool($n);
#     # } else{
#     #     # echo $n. PHP_EOL;
#     #     var_dump is_bool($n);
#     # }
# $a = "check";
# $array = [-1, -2, -14, 2, 5, 6, 3, 7, 9, 10, 16, 25, 24];
# $a($array);
# # "check" = $n;
# # echo check($n);
# # echo check ((int) trim(fgets(STDIN)));


// 3. buat luas persegi dengan arrow function
# $s1 = 5;
# $s2 = 5;
# $p = $s1 * $s2;
$lp = fn($p) => "luas persegi : $s * $s\n";
# $lp = fn() => "luas persegi : $p\n";
echo $lp($s * $s);
# echo $lp($p);
# echo $p;
// function adalaha tempat dimana kita mendekalrasikan berapa banyak variable atau value yang akan kita jalankan. jadi jika ingin menghitung 2 nilai maka kita perlu menuliskan 2 nilai juga.
// seperti jika ingin menghitung 2 nilai didalam argument. maka didalam function kita perlu membuat 2 variable yang kita hitung / jalankan didalam argument
// jadi simplenya adalah, "tidak simple"
// ketika ingin menghitung 2 nilai yang kita tulis didalam argument maka didalam parameter juga perlu kita menulis perintahnya didalam argument
// e.g. di argument kita ingin menghitung luas persegi dengan rumus 5 * 5
// maka didalam parameter tinggal menuliskan perintahnya dengan memberikan variable didalam parameter dengan memberikan variablenya
// sorry contohnya ga lanjut. lupa'





?>