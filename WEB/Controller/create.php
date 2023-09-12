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
    require_once 'functions.php'; // Import file yang berisi fungsi-fungsi

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Validasi data yang dikirimkan melalui formulir
    $name  = $_POST['name'];
    $type  = $_POST['type'];
    $model = $_POST['model'];
    $brand = $_POST['brand'];

    // Validasi data sesuai kebutuhan (contoh: panjang karakter, tipe data, dll.)

    // Koneksi ke database
    $cnt = mysqli_connect($servername, $username, $password, $dbname);

    // Buat query SQL INSERT sesuai dengan struktur tabel
    $query = "INSERT INTO motor (name, type, model, brand) VALUES (
        '{$name}', '{$type}', '{$model}', '{$brand}'
    )";

    // Eksekusi query
    if (mysqli_query($cnt, $query)) {
        // Redirect pengguna kembali ke index.php jika berhasil
        header('Location: index.php');
        exit;
    } else {
        // Jika ada kesalahan, tampilkan pesan kesalahan
        echo 'Gagal menambahkan data: ' . mysqli_error($cnt);
    }

    // Tutup koneksi ke database
    mysqli_close($cnt);
}

?>
</body>
</html>
