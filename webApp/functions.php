<?php 
// require './index.php';

$servername = "localhost";
$username = "4lend";
$password = "nix";
$dbname = "dataMotor";

// ini sudah tidak diperlukan karena konek sudah dilakukan didalam function
$cnt = mysqli_connect( $servername, $username, $password, $dbname );

// cara show data dari database
// $variable = mysqli_query ($variableKoneksi, $variableQueryYgAkanDigunakan);

function query($query){
    global $cnt;
    $result = mysqli_query($cnt, $query);
    // rows adl wadah kosong untuk menampung data yg ingin ditampilkan
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        // data yang telah didapatkan pada variable row akan ditampung / dimasukkan ke variable $rows
        $rows[] = $row;
    }
    // data yg ada divariable $rows disimpan / direturn (belum ditampilkan)
    return $rows;
}




// karena sudah mendeklarasikan $data, maka $_POST sudah tidak diperlukan
function tambah($data){
    global $cnt;
    // ambil data dari tiap element
    // $name = $_POST["name"];
    $name   = $data["name"];
    $type   = $data["type"];
    $model  = $data["model"];
    $brand  = $data["brand"];

    // query insert data
    $query = "INSERT INTO motor VALUES (NULL, '$name', '$type', '$model', '$brand')";
    mysqli_query($cnt, $query);

    return mysqli_affected_rows($cnt);

}

function hapus($id) {
    global $cnt; // Pastikan variabel $cnt telah didefinisikan dan mengacu pada koneksi database yang benar.

    // Buat query DELETE SQL berdasarkan ID atau kriteria lain yang sesuai dengan kebutuhan Anda.
    $query = "DELETE FROM motor WHERE id = $id"; // Gantilah 'nama_tabel' dengan nama tabel yang sesuai.

    // Eksekusi query DELETE.
    mysqli_query($cnt, $query);

    // menampilkan informasi
    return mysqli_affected_rows($cnt);

}



function update($data) {
    global $cnt;

    // Ambil data dari formulir
    $id = $data['id'];
    $name = $data['name'];
    $type = $data['type'];
    $model = $data['model'];
    $brand = $data['brand'];

    // Buat query SQL UPDATE
    $query = "UPDATE motor SET name='$name', type='$type', model='$model', brand='$brand' WHERE id=$id";

    // Jalankan query
    mysqli_query($cnt, $query);

    // Cek apakah query berhasil dijalankan
    if (mysqli_affected_rows($cnt) > 0) {
        return true; // Berhasil mengupdate data
    } else {
        return false; // Gagal mengupdate data
    }
}










?>