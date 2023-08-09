<?php 

# function keyGanjil () { 
#     $num = [24, 79, 32, 65, 82, 15];
#     foreach {
#         if(num / 2 == 1){
#             echo $num;
#         }
#     }
# } 
# keyGanjil ();

// 1. 
echo "## Nomer 1 ##\n";
function keyGanjil($data) {
    $fd = [];
    foreach ($data as $k => $v) {
      if ($k % 2 != 0) {
          $fd[$k] = $v;
      }
    }

    asort($fd);
    
    $result = [];
    $count = 0;

    foreach ($fd as $k => $v) {
      if ($count < 3) {
          $result[$k] = $v;
          $count++;
      } else {
          break;
      }
    }
    
    return $result;
}

$data = [24, 79, 32, 65, 82, 15];
$hasil = keyGanjil($data);
print_r($result);


// 2.
echo "\n## Nomer 2 ##\n";
function ubahData(callable $formatFunction, ...$args) {
    // Mengubah data menjadi string menggunakan format function
    $output = implode(', ', array_map($formatFunction, $args));
    
    return $output;
}

$formatFunction = function($item) {
    return "\"$item\"";
};

$hasil = ubahData($formatFunction, "Syifa", "Hanif", "Danu", "Hafidz", "Dimas", "Faqih");
echo $hasil;


// 3.
echo "\n## Nomer 3 ##\n";
function categorizeSecurityLevel($numPirates) {
    return function() use ($numPirates) {
        if ($numPirates > 50) {
            return 'Tidak Aman';
        } elseif ($numPirates >= 30 && $numPirates <= 50) {
            return 'Kurang Aman';
        } elseif ($numPirates >= 10 && $numPirates < 30) {
            return 'Agak Aman';
        } elseif ($numPirates < 10 && $numPirates > 0) {
            return 'Aman';
        } else {
            return 'Sangat Aman';
        }
    };
}

// Input dinamis
$jumlahBajakLaut = 25;

// Membuat closure dengan jumlah bajak laut sebagai input
$securityLevelFunction = categorizeSecurityLevel($jumlahBajakLaut);

// Memanggil closure untuk mendapatkan keterangan keamanan
$securityLevel = $securityLevelFunction();

echo "Jumlah bajak laut: $jumlahBajakLaut\n";
echo "Tingkat keamanan: $securityLevel\n";


// 4. 
echo "\n## Nomer 4 ##\n";
include 'function.php';

$hargaProduk = [12000, 31000, 25000, 40000, 17000];
echo "Daftar harga produk:\n" . implode(', ', $hargaProduk) . "\n";

hargaProduk($hargaProduk);


?>
