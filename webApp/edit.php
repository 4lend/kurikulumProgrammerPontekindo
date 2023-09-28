<?php 
require './functions.php';

// mengambil data id yang ada di URL
$id = $_GET["id"];
// var_dump($id);
// query data mahasiswa berdasarkan id
$dt =  query ("SELECT * FROM motor WHERE id = $id")[0];
// var_dump($dt["name"]);

$servername = "localhost";
$username = "4lend";
$password = "nix";
$dbname = "dataMotor";
$cnt = mysqli_connect( $servername, $username, $password, $dbname );

// if (!$cnt) {
    // die("Koneksi database gagal: " . mysqli_connect_error());
// }

// cek kondisi apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    // cek data apakah berhasil diubah atau tidak
    if( update($_POST) > 0 ){
        echo "
            <script>
                alert('data berhasil diedit');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diedit');
                document.location.href = 'index.php';
            </script>
        ";
    }
    // jika tombol dg type submit sudah ditekan maka ini akan menampilkan data yg sudah dimasukkan
    // var_dump($_POST);

    // sudah tdk digunakan, krn sudah pindah ke function
    // cek data
    // var_dump(mysqli_affected_rows($cnt));
    # if( mysqli_affected_rows($cnt) > 0 ){
    #     echo "berhasil";
    # } else{
    #     echo "gagal";
    #     echo "<br>";
    #     echo mysqli_error($cnt);
    # }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Motor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" class="href"> 
</head>
<body>
    <h1>Edit Data Motor</h1>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $dt["id"]; ?> ">
        <ul>
            <li>
                <!-- antara for & id akan saling terhubung / disesuaikan dengan id di tag input -->
                <label for="Name">Name  </label>
                <!-- name disesuakan dengan namaColumnDiDatabase | id disesuaikan dengan for pada tag label -->
                <input type="text" name="name" id="Name" required value="<?= $dt["name"] ?>">
            </li>
            <li>
                <label for="Type">Type  </label>
                <input type="text" name="type" id="Type" required value="<?= $dt["type"] ?>">
            </li>
            <li>
                <label for="Model">Model  </label>
                <input type="text" name="model" id="Model" required value="<?= $dt["model"] ?>">
            </li>
            <li>
                <label for="Brand">Brand  </label>
                <input type="text" name="brand" id="Brand" required value="<?= $dt["brand"] ?>">
            </li>
            <li>
                <button type="submit" name="submit">
                    Edit Data!
                </button>
            </li>
        </ul>
    </form>
    
</body>
</html>