<?php

do {
  echo "selamat datang di perpus digital\n\n";
  echo "silahkan pilih opsi\n";
  echo "1. Main Menu\n";
  echo "2. Exit\n";
  echo "pilih : ";
  $menu = trim(fgets(STDIN));
  if ($menu == 2){
    echo "anda telah keluar" . PHP_EOL;
    exit;
  } elseif ($menu == 2){
    echo "anda telah keluar";
  }
  if ($menu == 1){
    echo "nama peminjam : ";
    $nama = trim(fgets(STDIN));
    echo "judul buku : ";
    $judul = trim(fgets(STDIN));
    echo "batas hari peminjam : ";
    $batas = trim(fgets(STDIN));
    echo "berapa hari buku dipinjam : ";
    $hari = trim(fgets(STDIN));

    $terlambat = $hari - $batas;

    $biayaSewa = 5000 * $hari;
    $biayaDenda = 10000 * $terlambat;
    if( $batas > $hari ){
      $biayaSewa = 5000 * $hari;
      $biayaDenda = NULL;
      $terlambat = $hari;
      echo "anda meminjam buku selama $terlambat hari\n" . "dan dikenakan biaya peminjaman sebanyak Rp.$biayaSewa\n";
      break;
    } elseif (  ){

    } else {
    echo "dikenakan denda sebanyak Rp.$totalDenda" . PHP_EOL . "dengan rincian Rp.$biayaSewa + $biayaDenda" . PHP_EOL . "\n";
    }
    # echo "total hari terlambat mengembalikan buku selama $terlambat hari\n";
    # echo "dikenakan denda sebanyak Rp.$totalDenda" . PHP_EOL . "dengan rincian Rp.$biayaSewa + $biayaDenda" . PHP_EOL . "\n";
  }
  $exit = strtoupper(trim(fgets(STDI)));
} while ( $comeback == "Y" );
echo PHP_EOL . "ingin kembali ke menu? Y/N : ";
$comeback = trim(fgets(STDIN));
echo "terimakasih sudah melakukan pembayaran" . PHP_EOL;

?>
