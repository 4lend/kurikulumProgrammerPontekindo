<?php

// membuat menambahkan data array dinamis yg index nya dimulai dari 1 / bukan dari 0

// mentor ada acara pergi jadi belum materi
// materi hari ke-9 akan dimulai setelah mengerjakan tugas dibawah
//
$pakaian = [];
do {
balik:
    echo "item yg ingin ditambahkan kedalam array : ";
    $input = trim(fgets(STDIN));
    $pakaian[] = $input;
    echo "~> list array sementara : \n";
    foreach ($pakaian as $index => $cloth) {
        echo $index + 1 . " " . $cloth . PHP_EOL;
    };
    balik1:
    echo ">> apakah masih ada item yang ingin ditambahkan? << Y/N : ";
    $yn = strtoupper(trim(fgets(STDIN)));
    if($yn == "Y"){
        goto balik;
        # } elseif ($yn != "Y" || $yn != "N"){
    } elseif ($yn == "N"){
        echo "terimakasih sudah menggunakan\n\n";
        echo "~~> list array yang telah ditambahkan : \n";
        foreach ($pakaian as $index => $cloth) {
            echo $index + 1 . " " . $cloth . PHP_EOL;
        };
        break;
    } else {
        echo "masukkan input yang benar\n";
        goto balik1;
    }

    # echo "edit data (y/n) ";
    # $e = trim(fgets(STDIN));
    # if($e == "y"){
    #     // update
    # echo "pilih data yang ingin diedit : ";
    # }
    
   # echo "delete data (Y/N) : ";

} while (true);

// ada dimateri pak eko
// function parameter

// function argument
function notif($nama){// parameter
    echo "$nama telah terdaftar\n";
}

notif("fandy"); // argument : value yang akan dikirimkan parameter

function sum (int $a, int $b){
    $t = $a = $b;
    echo "$a + $b = $t\n";
    echo $a + $b = $t\n";
}

?>
