<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Data</title>
</head>
<body>
    <h1>Form Tambah Data Motor</h1>
    <form method="POST" action="proses_tambah.php">
        <label for="name">Nama:</label>
        <input type="text" name="name" required><br>

        <label for="type">Tipe:</label>
        <input type="text" name="type" required><br>

        <label for="model">Model:</label>
        <input type="text" name="model" required><br>

        <label for="brand">Merek:</label>
        <input type="text" name="brand" required><br>

        <button type="submit">Tambah Data</button>
    </form>
</body>
</html>