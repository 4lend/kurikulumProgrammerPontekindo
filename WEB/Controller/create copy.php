# <?php 
# require '../Model/cnt.php';
# 
# function create($dt){
#     global $cnt;
#     // ambil data dari tiap element
#     // $name    = $_POST["name"];
#     // $name   = $data["name"];
#     // $type   = $data["type"];
#     // $model  = $data["model"];
#     // $brand  = $data["brand"];
# 
#     $name   = htmlspecialchars($dt["name"]);
#     $type   = htmlspecialchars($dt["type"]);
#     $model  = htmlspecialchars($dt["model"]);
#     $brand  = htmlspecialchars($dt["brand"]);
# 
#     $query = "INSERT INTO motor VALUES (NULL, '$name', '$type', '$model', '$brand')";
#     $insertResult = query($query);
#     if ($insertResult) {
#         return mysqli_affected_rows($cnt);
#     } else {
#         return -1; // atau nilai lain yang menandakan kegagalan
#     }
# }
# 
# ?>



<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Data</title>
</head>
<body>
    <h1>Form Tambah Data Motor</h1>
    <form method="POST" action="">
        <label for="name">Nama:</label>
        <input type="text" name="name" required><br>

        <label for="type">Tipe:</label>
        <input type="text" name="type" required><br>

        <label for="model">Model:</label>
        <input type="text" name="model" required><br>

        <label for="brand">Merek:</label>
        <input type="text" name="brand" required><br>

        <button type="submit" name="submit">Tambah Data</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
        require 'functions.php'; // Import file yang berisi fungsi-fungsi

        $data = [
            'name'  => $_POST['name'],
            'type'  => $_POST['type'],
            'model' => $_POST['model'],
            'brand' => $_POST['brand']
        ];

        // Memanggil fungsi tambah untuk menambahkan data ke dalam database
        if (tambah($data)) {
            echo 'Data berhasil ditambahkan.';
        } else {
            echo 'Gagal menambahkan data.';
        }
    }
    ?>
</body>
</html>



