<?php 
require_once __DIR__ . '/../Controller/functions.php';

// menggunakan foreach agar semua row terdata semua, jadi ketika meng-outputkan 'name' maka array associatife yang bernma 'name' akan teroutput semua.
// Ambil nilai id dari URL
$id = $_GET['id'];
var_dump($id);
$ID = $Database->dataID($_GET['id']);
// define('id', $_GET['id']);
define('name',$ID['name']);
define('type',$ID['type']);
define('model',$ID['model']);
define('brand',$ID['brand']);
echo "<br>";
var_dump($ID);

# this functin moved to conn.php
// $db = new Database();
// $conn = $db->conn;
// // Buat query untuk mengambil data berdasarkan id
// $query = "SELECT * FROM motor WHERE id = :id";
// $stmt = $conn->prepare($query);
// $stmt->bindParam(':id', $id, PDO::PARAM_INT);
// $stmt->execute();

// // Ambil data dari hasil query
// $data = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
</head>
<body>
    <h1>Update Data</h1>

    <form action="../Controller/functions.php" method="post">

    <input type="hidden" name="id" value="<?= id; ?>">
    <!-- <input type="hidden" name="id" value="<?= $id[$_POST]; ?>"> -->
    <input type="text" name="name" placeholder="Nama" value="<?= name; ?>">
    <br>
    <input type="text" name="type" placeholder="Jenis" value="<?= type; ?>">
    <br>
    <input type="text" name="model" placeholder="Model" value="<?= model; ?>">
    <br>
    <input type="text" name="brand" placeholder="Brand" value="<?= brand; ?>">
    <br>
    <button type="submit" name="update">Update Data</button>

    </form>
    
</body>
</html>