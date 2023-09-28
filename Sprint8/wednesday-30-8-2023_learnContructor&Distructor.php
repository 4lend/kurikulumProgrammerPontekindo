<?php 

class FileHandler {
    private $file;

    // Constructor
    public function __construct($filename) {
        $this->file = fopen($filename, 'w');
    }

    // Destructor
    public function __destruct() {
        fclose($this->file);
        echo "Objek telah dihancurkan dan file telah ditutup";
    }
}

// Membuat objek dari kelas FileHandler
$fileHandler = new FileHandler('data.txt');

// Setelah objek tidak lagi diperlukan, destructor akan dipanggil secara otomatis



// intinya contruct dan destruct akan sangat bermanfaat ketika project nya sudah besar dan mengharuskan ketelitian dalam pengelolaan data yang ada
// contructor -> membuka inisialisasi / dijalankan ketika program pertama dijalankan
// destructor -> menutup / membersihkan program yg telah dijalankan


?>