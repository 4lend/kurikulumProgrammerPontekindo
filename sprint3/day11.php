<?php

// return function adalah funsi yang dikembalikan ketika program function dijalankan
// function aslinya tidak memiliki perintah apapun untuk dijalankan

# function sum($a, $b){
#     $t = $a + $b;
#     return $t;
# }
# $penjumlahan = sum(55,45);
# echo $penjumlahan;




# // buat variable function dengan tujuan untuk memangggil nama dan divisi dengan parameter diisi default value
# function psit ($nama, $divisi){
#     $siswa = $nama + $divisi;
#     return $siswa;
# }
# psit("syifa" , "programmer");
# echo psit;


# function psit ($nama = "fulan", $divisi = "programmer"){
#     return "Nama : $nama\nDivisi : $divisi\n";
# }
# 
# $show = "psit";
# echo $show("fauzan ", "multimedia");
# 
# # $show = "nama_divisi";
# # echo $show("fauzan ", "multimedia");


# // buat seperti ini tanpa default value dengan variable-lenght-argument : nama-nama hewan
# 
# function hewan (...$a){
#     # $a = ["kambing", "sapi", "bebek", "angsa", "ayam"];
#     return implode (",",$a);    
# }
# $show = "hewan";
# do {
#     echo $show = trim(fgets(STDIN));
# } while (true);


#function jumlah_kata
#
#jumlah_kata("saya adalah seorang kapten", function ($kalimat){return str_word_count ($kalimat);});


?>