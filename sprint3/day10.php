<?php

// buat function dengan parameternya variable-length-argument yang mana function akan mengembalikan nilai array dengan nama variablenya 'siswa'
// lalu ubah variable siswa menjadi string
// tampilkan menggunakan echo

$siswa[hafidz, syifa, dimas, hanif];
function nama(...$siswa){return $siswa;}
echo implode ("\n",nama("fandy", "hanif", "dimas", "hafidz"));

// Tugas membuat aplikasi todolist iterminal
// PR belajar function -  return
?>
