
<?php

// operator perbandingan
// sama dengan -> == : nilai yg dibandingankan denan nilai lainnya,
// itu memiliki nilai yang sama meskipun tipe data yang berbeda
var_dump("1728" == 1728);
//identik -> === : nilai dan tipe data harus sama agar outputnya true,
var_dump(1728 === 1728);

// tidak sama dengan -> <> / != : nilainya tidak sama maka hasilnya true
var_dump(2 != 21);
var_dump(2 != "2");

// tidak identik !== : nilai dan tipe data tidak sama make hasilnya true
var_dump(100 !== "100");

// kurang dari -> <
var_dump(23 < 25);

// kurang dari sama dengan -> <=
var_dump(77 <= 77);

// operator logika
// and -> && / and
var_dump(true && false)

// or -> || / or : salah satu true maka hasil true
// xor
// x-nor

// operator increment dan decrement
// post increment -> dikembalikan dulu var nya baru ditambah nilai 1
$angka = 22;
$angka++;     // ditambah dulu baru dikembalikan ke varnya / awal;
echo $angka PHP_EOL;

$angka = 22;
$angka--;   // diawal dikurangi dulu baru dikembalikan ke var nya / awal
echo $angka PHP_EOL;

// operator array

?>
