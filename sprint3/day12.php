<?php

# echo "### menghitung keliling persegi";
# echo "masukkan luas sisi";
# $sisi = trim(fgets(STDIN));
# $jumlah = 4;
# $count = fn() => "jumlah total : ". $sisi * $jumlah. PHP_EOL;
# echo $count();
# 
# function keliling($keliling){
#   echo "Keliling : ". $keliling(16);
# }
# keliling(fn($sisi) => 4 * $sisi);
# 
# # atau kita seperti ini
# function keliling($keliling){
#   echo "sisi : ";
#   $sisi = trim(fgets(STDIN));
#   echo "Keliling : ". $keliling(16);
# }
# keliling(fn($sisi) => 4 * $sisi);


// factorial function
# function factorial ($angka){
#   if($angka == 1){
#     return 1;
#   } else{
#     return {$angka * factorial($angka-1)};
#   }
# }

function factorial($angka){
  if($angka == 1){
    return 1;
  } else{
    return $angka * factorial($angka - 1);
    # return($angka);
  }
}
echo factorial(8). PHP_EOL;


?>
