<?php

include_once __DIR__ . '/../Controller/functions.php';

foreach ($data as $dt) {
    // echo "<p>{$dt['id']} - {$dt['name']} - {$dt['type']} - {$dt['model']} - {$dt['brand']} <a href='hapus_data.php?id={$dt['id']}'>Hapus</a></p>";
    $id = $dt['id'];
}

// if (isset($dt['id'])) {
    // $id = $dt['id'];
// } else {
    // echo "ID tidak ditemukan.";
    // exit;
// }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Konfirmasi Hapus Data</title>
</head>
<body>
    <h1>Konfirmasi Hapus Data</h1>
    <!-- deleteData pada id meruju pada class difile conn.php -->
    <form id="deleteData" action="../Controller/functions.php" method="post">
        <!-- Field tersembunyi untuk mengirim ID -->
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button type="submit">Hapus</button>
    </form>
</body>
</html>