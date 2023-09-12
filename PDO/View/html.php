<?php
// include __DIR__ . '/../Model/conn.php';
include __DIR__ . '/../Controller/functions.php';
?>


<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi OOP dengan PDO</title>
</head>
<body>
    <h1>Data dari Tabel Data Motor</h1>
    <table border="1" cellpadding="10" cellspacing=0">
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Model</th>
            <th>Brand</th>
        </tr>

        <?php foreach ($data as $dt): ?>

        <tr>
            <td><?= $dt["name"]; ?></td>
            <td><?= $dt["type"]; ?></td>
            <td><?= $dt["model"]; ?></td>
            <td><?= $dt["brand"]; ?></td>
            <td>
                <a href="">Ubah</a>
                <a href="">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="./View/create.php">
        <button type="button" class="btn btn-primary" id="add-data">Tambah Data</button>
    </a>
</body>
</html>