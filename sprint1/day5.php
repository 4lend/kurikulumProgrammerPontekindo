<?php
# 
# // pengkondisian
# // ternari operator
# // digunakan untuk pengkondisian yang lebih sederhana / tidak makan banyak baris seperti if else
# $nilai = 99;
# $result = $nilai == 75 ? "Perfect" : ($nilai >= 80 ? "Excellent" : ($nilai >= 60 ? "Good" : "Not Passed"));
# echo $result, PHP_EOL;
# // note : if you want add more else you need separate between what do you do using ":" and start with "(" and the ")" in last line before ";"
# 
# // membuat pengkondisian menggunakan ternary yang menhasilkan nama buah sesuai warnanya apabila kita mengingat suatu warna (dinamis). misal bisa menginput wana merahh akan mengoutput buah apel.
# echo "masukkan warna : ";
# $warna = trim(fgets(STDIN));
# $result = $warna == "merah" ? "apel" : ($warna == "orange" ? "jeruk" : ($warna == "kuning" ? "pisang" : "bukan buah"));
# echo $result, "\n";
# 
# // null coalesting operator

// perulangan / for loops
// buatlah perulangan menggunakan for loop dengan kondisi if-else dimana output akan menghasilkan warna merah apabila nilai $i bernilai 5 dan berwarna hijau apabila nilai $i bernilai 10
$i = 1;
for($i = 1; $i <= 10; $i++){
  if ($i == 5){
    echo "merah\n";
  } elseif ($i == 10){
    echo  "hijau\n";
  } else {
    echo $i . "\n";
  }
  # if ($i == 5){
  #   echo
  # }

// for

// while loop
// disini kita hanya bisa mendeklarasikan sampai berapa perulangan akan kita lakukan
  $i = 1;
  while($i<10){
    echo "Hello\n";
    $i++;
  }
}

// do while loop
// akan meng 'echo' terlebih dahulu baru akan di perulang

// break & continue
for($i = 1; $i <= 10; $i++){
  if ($i == 5){
    echo "merah\n";
  } elseif ($i == 10){
    echo  "hijau\n";
  } else {
    echo $i . "\n";
  }
?>
