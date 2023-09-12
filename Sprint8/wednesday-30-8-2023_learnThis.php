<?php

########################################
## penggunaan this pada class PHP OOP ##
########################################

// PTI sebagai nama class
class PTI {
    // didalam class terdapat attributs / properties yang bernama asmo
    // dan disini kita membuatnya 'public' / bisa diakses dari luar
    public $asmo;

    // didalam class PTI kita membuat method yg bernama tepangan
    // didalamnya terdapat perintah echo "blabla" dan mengikutsertakan properties asmo
    public function tepangan(){
      echo "Sugeng enjing arek2 kabeh, \n jenengku ". $this->asmo;
    }
}

// membuat variable $tiyang yg akan menjalankan program / perintah dari class PTI
$tiyang = new PTI();
// memberikan nilai kepada properties asmo yg ada di variable class PTI
$tiyang->asmo = "Chakra Djani";
// menjalankan method tepangan yg diambil dari class PTI
$tiyang->tepangan();
echo "<br>";

########################################
## penggunaan self pada class PHP OOP ##
########################################
class MyClass {
    // kita membuat properties count dengan value angka 0
    // ga tau function static buat apaan
    public static $count = 0;
    // membuat method incrementCount yang meng-output-kan value properties $count
    // yg dioutputkan oleh $count bukan angka yg ada di properties, tapi akan ditambah 1 terlebih dahulu
    // "self" untuk mengambil value di class yg sama
    public static function incrementCount() {
        self::$count++; // Mengakses properti statis dengan self
    }
}
MyClass::incrementCount();
MyClass::incrementCount();
echo "Jumlah count: " . MyClass::$count; // Output: "Jumlah count: 2"





?>