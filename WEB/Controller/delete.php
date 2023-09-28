<?php
require_once '../Model/cnt.php';

function delete($data) {
    // ambil data dari elemen formulir
    global $cnt;
    $id     = $_GET["id"];
    $name   = htmlspecialchars($data['name']);
    $type   = htmlspecialchars($data['type']);
    $model  = htmlspecialchars($data['model']);
    $brand  = htmlspecialchars($data['brand']);

    // query update data
    $query = "DELETE from motor SET name='$name', type='$type', model='$model', brand='$brand' WHERE id=$id";
    // menjalankan query dan mengembalikan hasilnya menggunakan fungsi 'query'
    $updateResult = query($query);
    // $updateResult berisi data yang dikembalikan oleh fungsi 'query', yaitu array hasil query
    // dalam konteks UPDATE, Anda mungkin tidak perlu memproses hasilnya
    // tetapi Anda bisa memeriksa apakah operasi berhasil
    if ($updateResult) {
        return mysqli_affected_rows($cnt);
    } else {
        return 0; // atau nilai lain yang menandakan kegagalan
    }
}

## logic sebelumnya ##
# if (isset($_GET['id'])) {
    # $idToDelete = $_GET['id'];

    # if (hapus($idToDelete)) {
        # echo "
            # <script>
                # alert('Data berhasil dihapus.');
                # window.location.href = 'index.php';
            # </script>
        # ";
    # } else {
        # echo "
            # <script>
                # alert('Data gagal dihapus.');
                # window.location.href = 'index.php';
            # </script>
        # ";
    # }
# } else {
    # echo "
        # <script>
            # alert('ID data tidak valid.');
            # window.location.href = 'index.php';
        # </script>
    # ";
# }
?>
