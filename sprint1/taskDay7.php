<?php

echo "##### WElCOME TO MINI GAMES TEBAK ANGKA #####\n";

again: 
do {
    # echo "akan muncul angka dari 1-9 silahkan tebak angka mana yang keluar!\nkamu memiliki 3 kali kesempatan\n";
    mt_rand(1,9);
    $random = mt_rand(1,9);
    echo $random . PHP_EOL;
    echo "masukkan angka tebakan kamu : ";
    $angka = trim(fgets(STDIN));
    $life = 3;
    if($angka == $random){
        echo "kamu menebak angka yang benar\n";
        echo "ingin bermain lagi? Y/N : ";
        $benar = strtoupper(trim(fgets(STDIN)));
        switch ($benar) {
            case "Y":
                goto again;
            case "N":
                goto end;
        }
    } else ($angka != $random){
        echo "change masih $life\n";
        echo "kamu salah menebak angka yg muncul\nangka yang muncul adalah $angka\nsilakan coba lagi\n";
        echo "mau mencoba lagi? Y/N : ";
        $coba = strtoupper(trim(fgets(STDIN)));
    }
    # $YN = trim(fgets(STDIN));
    # if($coba == "N"){
    # } break;
} while ($coba == "Y" || $life--);
    end:
    echo "terimakasih sudah bermain game ini";
echo "\n";


?>