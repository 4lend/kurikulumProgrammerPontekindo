<?php 
require_once __DIR__ . '/../Controller/functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <!-- <?= var_dump($data); ?> -->
    <br>

    <form action="../Controller/functions.php" method="post">

        <input type="text" name="name" placeholder="Nama">
        <br>
        <input type="text" name="type" placeholder="Jenis">
        <br>
        <input type="text" name="model" placeholder="Model">
        <br>
        <input type="text" name="brand" placeholder="Brand">
        <br>
        <button type="submit">Tambah Data</button>

    </form>
    
</body>
</html>