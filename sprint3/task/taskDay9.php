<?php

do {
    # echo "SELAMAT DATANG DI TODOLIST APP\n";
    # echo "Silahkan Pilih Menu\n\n";
    # echo "1. Masuk\n 2. Keluar\n";
    # $1 = 
    # $2 = 
    # $op = trim(fgets(STDIN));
    # if($op == 1){
    # } else ($op == 2){
    #     echo "Andah telah Keluar";
    #     break;
    # }
    
    echo "SELAMAT DATANG DI TODOLIST APP\n";
    echo "1. Tambah List \n2. Edit List \n3. Hapus List \n4. Keluar App\n";
    echo "List Todolist";
    $lt = [];
    if($lt == null){
        echo "List masih kosong, silahkan tambahkan tugas\n";
    };
    echo "Pilih Opsi : ";
    $o = trim(fgets(STDIN));
    if($o == 1){
        echo "Tambah List\n";
        echo "Masukkan Tugas yang ingin ditambahkan : ";
        array_push($lt);
        # $lt[] = trim(fgets(STDIN));
        # $a = trim(fgets(STDIN));
        foreach ($lt as $k => $v){
            echo $k;
        }
    } elseif ($o == 2){
        echo "Edit List\n";
        echo "Pilih Nomor Tugas yang ingin diedit : ";
        $a = trim(fgets(STDIN));
        echo $lt;
    }
}
while(true);

?>
