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
    $life = 0;
        if($angka == $random){
            echo "anda menebak angka yang benar!\n";
            inag:
            echo "ingin bermain lagi? (Y/N) : ";
            $yn = strtoupper(trim(fgets(STDIN)));
            if ($yn == "Y"){
                echo "anda memilih Y, kembali ke permainan\n";
            } elseif ($yn == "N"){
                echo "anda memilih N, mengakhiri permainan\nTerimaKasih sudah bermain\n";
                goto end;
            } else {
                echo "masukkan input yang benar! (Y/N) : \n";
                goto inag;
            }
        } else {
            echo "anda salah menebak angka yang muncul";
        }
    } while (true);
    # } while ($yn == "Y" || $life++);
        end:
        echo "terimakasih sudah bermain game ini";
    echo "\n";

    #     echo "kamu menebak angka yang benar\n";
    #     echo "ingin bermain lagi? Y/N : ";
    #     $benar = strtoupper(trim(fgets(STDIN)));
    # } else ($angka == $random){
    #     echo "masukkan input yang benar! Y/N : ";
    # }
        # switch ($benar) {
        #     case "Y":
        #         goto again;
        #     case "N":
        #         goto end;
        # }
    # } else ($angka != $random){
    #     echo "change masih $life\n";
    #     echo "kamu salah menebak angka yg muncul\nangka yang muncul adalah $angka\nsilakan coba lagi\n";
    #     echo "mau mencoba lagi? Y/N : ";
    #     $coba = strtoupper(trim(fgets(STDIN)));
    # }
    # $YN = trim(fgets(STDIN));
    # if($coba == "N"){
    # } break;


?>