<?php 
// require -> seolah2 kode yg ada difile functions.php kita letakkan disini | import
require_once "../Model/cnt.php";
require_once "../Controller/functions.php";
// $show = query("SELECT * FROM motor");

// $show = query( "SELECT * FROM motor" );

// memberikan kondisi untuk mengecek apakah database sudah terhubung atau belum, jika ter-connect akan apa dan jika tidak akan apa
// if( !$result ) {
    // echo mysqli_error($cnt);
// }
// 
// var_dump($result);

// jika hanya menggunakan mysqli_query tidak akan ada pesan error
// mysqli_query($cnt, "SELECT * FROM dataMotor")
// maka dari itu kita masukkkan ke dalam variable
// result adl perintah membawa lemari / sewadah2 nya dibawa tapi datanya tidak akan terlihat
// mysqli_query hanya menghitung / membawa data dari table motor, belum ada perintah untuk menampilkan
# $result = mysqli_query($cnt, "SELECT * FROM motor");
// maka jika kita ingin mengambil data dari wadah $result, kita harus tuliskan kode baru
// terdapat 4 cara, yaitu :
// mysqli_fetch_row()       -> mengembalikan / memberikan array numeric | e.g. var_dump($mtr[4]);
// mysqli_fetch_assoc()     -> ini array associate / assosiatif | e.g. var_dump($mtr["Brand"]);
// mysqli_fetch_array()     -> fleksibel, bisa menggunakan numeric & associate, dengan kekurangan ketika mem'print' semua data maka masing2 data akan terprint 2 (array numeric & array associate)
// mysqli_fetch_object()    -> digunakan jika menggunaakn object (OOP)

// while, sebagai perulangan. agar selama masih ada data di $result maka program akan terus dijalankan
// while( $dm = mysqli_fetch_assoc($result) );
// var_dump($dm["name"]);

// return / mengembalikan adl bagaimana php sudah menghitung / menampung sebuah data (biasanya array) tapi belum ditampilkan

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connect php dan database</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" class="href"> 
    <linkhttps://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js rel="stylesheet" href="" class="href">
</head>
<body>

    <br>
    <h1 class="text-uppercase fs-1 fw-bold text-center">daftar motor pondok teknologi indonesia</h1>

    <table class="table table-warning table-bordered table-striped-columns table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Model</th>
                <th scope="col">Brand</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>

        <?php $i = 1; ?>
        <?php 
            $query = "SELECT * FROM motor";
            $hasil = query($query);
        ?>
        <?php foreach ($hasil as $dt): ?>

        <tbody>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $dt["name"]; ?></td>
                <td><?= $dt["type"]; ?></td>
                <td><?= $dt["model"]; ?></td>
                <td><?= $dt["brand"]; ?></td>
                <td>
                    <!-- Tambahkan tombol Hapus dengan atribut data-id yang berisi ID data yang akan dihapus -->
                    <button class="btn btn-warning">
                        <a href="../Controller/update.php?id=<?= $dt['id']; ?>">Edit</a>
                        <a href="../Controller/delete.php?id=<?= $dt['id']; ?>">Hapus</a>

                    </button>
                </td>
            </tr>


            <!-- <div class="row align-self-start"> -->
                <!-- <div></div> -->
                <!-- <input type="text"> -->
            <!-- </div> -->
        </tbody>
        <?php $i++ ?>

        <?php endforeach; ?>
    </table>

    <br><br>
    <a class="pe-auto fs-1 fw-bold text-center" href="../Controller/create.php">tambah data motor</a>

</body>
</html>

<!-- flowchart, ERD, button back, dropdown / select option pada tambah data type (tambahdata | type) -->
<!-- flowchart kurang input -->
<!-- berikan nama pada aplikasi yg telah dibuat -->