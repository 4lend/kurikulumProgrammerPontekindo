<?php
// include __DIR__ . '/../Model/conn.php';
require_once __DIR__ . '/../Controller/functions.php';
// require_once './update.php';
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
            <th>Id</th>
            <th>Name</th>
            <th>Type</th>
            <th>Model</th>
            <th>Brand</th>
            <th>Option</th>
        </tr>

        <?php foreach ($data as $dt): ?>
        <?php $i = 1; ?>
        <tr>
            <!-- <td><?= $i; ?></td> -->
            <td><?= $dt["id"]; ?></td>
            <td><?= $dt["name"]; ?></td>
            <td><?= $dt["type"]; ?></td>
            <td><?= $dt["model"]; ?></td>
            <td><?= $dt["brand"]; ?></td>
            <td>
                <a href="./View/update.php?id=<?= $dt['id']; ?>&name=<?= $dt['name']; ?>">Ubah</a>
                <a href="./View/delete.php">Hapus</a>
            </td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
    <!-- <?php var_dump ($dt); ?> -->
    <a href="./View/create.php">
        <button type="button" class="btn btn-primary" id="add-data">Tambah Data</button>
    </a>
</body>
</html>