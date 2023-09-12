<?php 

// membuat / menjadikan class menjadi abstract
abstract class Kendaraan {
    abstract function berjalan();

    public function gas(){
        echo "ini parent class";
    }
}

class Mobil extends Kendaraan {
    function berjalan(){
        echo "Mobil Berjalan";
    }
    
    public function gas(){
        echo "ini child class";
    }
}

class Motor{
    public function berjalan(){
        echo "Motor Berjalan";
    }
    
    public static function hidup(){
        echo "Motor Hidup";
    }
}

$abstract = new Mobil;
// Motor::berjalan();   # ini akan error karena function berjalan pada class Motor berupa biasa, sedangkan cara yang digunakan untuk memanggil function static
Motor::hidup();     # ini akan berjalan karena function hidup berupa static (terpisah dari function, seperti kita memanggil const)

// ini akan memanggil function gas yang berada di parent class
// parent::gas();

# static == CONS -> tidak bisa dipanggil dg cara biasa / harus menggunakan "::"

?>