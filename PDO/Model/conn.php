<?php
$Database = new Database();
class Database {
    private $host = 'localhost';
    private $user = '4lend';
    private $password = 'nix';
    private $database = 'dataMotor';
    public $conn;

    public function __construct() {
        try {
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Koneksi database berhasil!";
        } catch(PDOException $e) {
            // echo "Koneksi database gagal: " . $e->getMessage();
        }
    }


    public function dataID($id,){
        try {
            require_once __DIR__ . '/../Controller/functions.php';
            $db = new Database();
            $conn = $db->conn;
            $query = "SELECT * FROM motor WHERE id = :id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            // Ambil data dari hasil query
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            return $data;
        } catch(PDOException $e){
            echo "Error: " . $e->getMessage();
            return null;
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

            if ($data->execute()) {
                // Setelah berhasil menambahkan data, arahkan pengguna ke halaman lain
                header('Location: ../index.php'); 
                exit; // Pastikan untuk keluar dari skrip setelah mengarahkan
            } else {
                return false;
            }
            // return $data->execute();
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function deleteData($id) {
        try {
            $query = "DELETE FROM motor WHERE id = :id";
            $data = $this->conn->prepare($query);
            $data->bindParam(':id', $id, PDO::PARAM_INT);

            if ($data->execute()) {
                header('Location: ../index.php'); 
                exit;
                // return true;
            } else {
                return false;
            }
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    function updateData($conn, $id, $name, $type, $model, $brand) {
        $sql = "UPDATE motor SET name = :name, type = :type, model = :model, brand = :brand WHERE id = :id";
        $data = $conn->prepare($sql);
        $data->bindParam(':name', $name, PDO::PARAM_STR);
        $data->bindParam(':type', $type, PDO::PARAM_STR);
        $data->bindParam(':model', $model, PDO::PARAM_STR);
        $data->bindParam(':brand', $brand, PDO::PARAM_STR);

        $data->execute();

        return $data->rowCount();
    }
}

// $Database = new Database();
$getData = $Database->getData();

// foreach ($getData as $motor) {
    // echo "Nama: " . $motor['name'] . "<br>";
    // echo "Type: " . $motor['type'] . "<br>";
    // echo "Model: " . $motor['model'] . "<br>";
    // echo "Brand: " . $motor['type'] . "<br>";
// }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $model = $_POST['model'];
    $brand = $_POST['brand'];

    if ($Database->createData($name, $type, $model, $brand)) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Gagal menambahkan data.";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        // Lakukan penghapusan data dengan ID yang diterima
        $Database->deleteData($id);

        // Setelah berhasil menghapus data, Anda dapat mengarahkan pengguna kembali ke halaman tampil_data.php
        header('Location: index.php'); // Ganti dengan halaman yang sesuai
        exit;
    } else {
        echo "ID tidak ditemukan di conn.php";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        // Lakukan penghapusan data dengan ID yang diterima
        $Database->updateData($id);

        // Setelah berhasil menghapus data, Anda dapat mengarahkan pengguna kembali ke halaman tampil_data.php
        header('Location: index.php'); // Ganti dengan halaman yang sesuai
        exit;
    } else {
        echo "ID tidak ditemukan di conn.php";
    }
}

// if (isset($_POST['id'])) {
    // $id = $_POST['id'];
// 
    // Lakukan penghapusan data dengan ID yang diterima
    // $Database->deleteData($id);
// 
    // Setelah berhasil menghapus data, Anda dapat mengarahkan pengguna kembali ke halaman tampil_data.php
    // header('Location: index.php'); // Ganti dengan halaman yang sesuai
    // exit;
// } else {
    // echo "ID tidak ditemukan.";
// }

?>