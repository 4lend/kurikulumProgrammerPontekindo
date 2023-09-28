<?php

class Laptop {
    // const diletakkan di atas
    // baru kemudian propertiesnya
    const DB = "MARIA DB";
    // buttom line -> string utk memastikan bahwa datanya adalah string, bukan yg lain
    // jadi jika string diganti dengan int maka akan error, karena data yg diinput ke variable brand adl string / karaktek dan bukan int / angka
    // var adl properties dan ini standar nya dituliskan diatas sebelum method / function
    var string $brand;
    // button line -> sama dengan int dibawah adl memastikan bahwa data yang diinput adalah int / angka
    var int $price = 15000;
    // buttom line -> fungsi dari ? dibawah adl agar ketika input dan kita menginputkan NULL / kosong / tidak memasukkan data maka tidak terjadi error
    // ini dikarenakan jika membuat variable maka by default kita harus mengisikan value nya | jika tidak terjadi error
    var ?string $type;

    // wednesday august 30 2023
    // method yg akan dijalankan diawal | ketika dipanggil
    function __construct(){
        echo "Hai, Saya adalah Construct . <br>";
    }

    // oke jadi gini, ini tadi error mulu bingung kek mana cara solve nya, tapi alhamdulillah dah ketemu. let's start
    // string sebelum $milik berfungsi untuk data yang dimasukkan / input harus berupa string
    // $c = "strtoupper" memberikan nilai default nya adalah strtoupper ( jika kita tidak memberikan nilai )
    // :string -> that's mean -> memastikan / check bahwa output / data keluar berupa string
    // :string tadi adalah cara PHP mengembalikan nilai dari fungsi. jadi nanti di 'return' apakah itu string atau bukan
    // nah karena ini pakai ":string" maka parameternya diganti dari echo menjadi return
    function sayThis(string $milik, $c = "strtoupper" ):string {
        return "INI LAPTOP ". $c($milik);
    }

    // ini menggunakan this untuk menggunakan 
    function hargaProduk() {
        $harga = number_format($this->price,0,0,'.');
        echo "Laptop Merek {$this->brand} <br> Harganya Rp. {$this->price}";
        echo "Database yang digunakan adalah : ". self::DB;
    }

    // method yg akan dijalankan diakhir
    function __destruct(){
        echo "Hai, Saya adalah Destruct";
    }
}

// mengakses / menggunakan properties menggunakan tanda panah, seperti contoh dibawah
$lenovo = new Laptop();
$lenovo->brand = "Lenovo";
$lenovo->price = "4500000";
$lenovo->type = NULL;
// hargaProduk adalan method -- kita sudah memanipulasi method hargaProduk (function)
$lenovo->hargaProduk();
// var_dump ($lenovo);
echo "Nama Brand : ". $lenovo->brand;
echo "<br>";
// echo "Harga : ". $lenovo->price;
// buttom line -> number_format utk menambahkan koma ditanra angka agar lebih mudah dibaca
echo "Harga : Rp. ". number_format($lenovo->price);
echo "<br>";
// buttom line -> jadi karena di function sayThis itu hanya me-return maka perlu dituliskan echo untuk manampilkannya
// pada strtolower jika tidak dituliskan tidak apa2, krn sudah ada default valuenya (strtoupper)
echo $lenovo->sayThis("vRen","strtolower");

"<br>";
// ini akan memanggil const yang telah kita deklarasikan
// namaClass:NAMA_CONTANT  -->  cara memanggil const yg ada didalam class
echo Laptop::DB;




### EXTENDS / INHERITANCE ### 
// extends adl inheritance / pewarisan
// extends akan mengambil semua data dari Laptop
// jadi meskipun didalam class NamaProduk tidak diisi, pada dasarnya kita bisa mengisinya sesuai value yang ada di class Laptop
echo "<br>";
echo "<br>";
class NamaProduk extends Laptop {

}
// membuat class Laptop ke variable $laptop
// $laptop = new Laptop();
$asus = new NamaProduk();
// memberikan value ke price ke class NamaProduk yang telah didapat dari class Laptop
echo $asus->price;
echo "<br>";



?>
