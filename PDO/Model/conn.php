<?php
class Database {
    private $host = 'localhost';
    private $user = '4lend';
    private $password = 'nix';
    private $database = 'dataMotor';
    private $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Koneksi database berhasil!";
        } catch(PDOException $e) {
            echo "Koneksi database gagal: " . $e->getMessage();
        }
    }

    public function getData(){
        $query = ("SELECT * FROM motor");
        $data = $this->conn->query($query);
        return $data->fetchAll(PDO::FETCH_ASSOC);
    }

    public function createData($name, $type, $model, $brand) {
        try {
            $query = "INSERT INTO motor (name, type, model, brand) VALUES (:name, :type, :model, :brand)";
            $data = $this->conn->prepare($query);
            $data->bindParam(':name', $name, PDO::PARAM_STR);
            $data->bindParam(':type', $type, PDO::PARAM_STR);
            $data->bindParam(':model', $model, PDO::PARAM_STR);
            $data->bindParam(':brand', $brand, PDO::PARAM_STR);

            return $data->execute();
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

// Contoh pemanggilan createData dengan data yang sesuai
// if ($Database->createData("Nama Motor", "Type Motor", "Model Motor", "Brand Motor")) {
//     echo "Data berhasil ditambahkan!";
// } else {
//     echo "Gagal menambahkan data.";
// }

    public function deleteData($id) {
    try {
        $query = "DELETE FROM motor WHERE id = :id";
        $data = $this->conn->prepare($query);
        $data->bindParam(':id', $id, PDO::PARAM_INT);

        if ($data->execute()) {
            return true;
        } else {
            return false;
        }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}

}

$Database = new Database();

// Contoh pemanggilan getData
$data = $Database->getData();
// var_dump($data);


## contoh yang salah ##
    // public function createData($name, $type, $model, $brand) {
    // try {
        // $query = "INSERT INTO motor (name, type, model, brand) VALUES (:name, :type, :model, :brand)";
        // $data = $this->conn->prepare($query);
        // $data->bindParam(':name', $name, PDO::PARAM_STR);
        // $data->bindParam(':type', $type, PDO::PARAM_STR);
        // $data->bindParam(':model', $model, PDO::PARAM_STR);
        // $data->bindParam(':brand', $brand, PDO::PARAM_STR);
// 
        // return $data->execute();
    // } catch(PDOException $e) {
        // echo "Error: " . $e->getMessage();
        // return false;
    // }
// 
// }
// 
// $Database = new Database();

?>