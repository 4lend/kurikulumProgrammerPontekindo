<?php 

class User {
    private $username; // Data penting

    public function setUsername($username) {
        // Validasi dan logika bisnis
        if (strlen($username) >= 5) {
            $this->username = $username;
        } else {
            echo "Username terlalu pendek.";
        }
    }

    public function getUsername() {
        // Metode yang memungkinkan akses terkontrol
        return $this->username;
    }
}
# cara menampilkan nama dari function getUsername
$user = new User();
# jika hurus kurang dari 5 maka akan menampilkan Username terlalu pendek
$user->setUsername("john"); // Akan disimpan karena panjangnya >= 5 karakter
echo $user->getUsername(); // Menampilkan username yang disimpan

?>