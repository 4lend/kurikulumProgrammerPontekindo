<?php
require_once('functions.php');

if (isset($_GET['id'])) {
    $idToDelete = $_GET['id'];

    if (hapus($idToDelete)) {
        echo "
            <script>
                alert('Data berhasil dihapus.');
                window.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal dihapus.');
                window.location.href = 'index.php';
            </script>
        ";
    }
} else {
    echo "
        <script>
            alert('ID data tidak valid.');
            window.location.href = 'index.php';
        </script>
    ";
}
?>
