

<?php 
  include './cnt.php';

  function showData () {
      global $cnt;  // declarated but not used
      global $sql;  // declarated but not used
      global $row;
      global $result;
      // global $sql = "SELECT * FROM motor";
      // global $result = mysqli_query($cnt, $sql);

      if (mysqli_num_rows($result) > 0 ){
        while( $row = mysqli_fetch_assoc($result)){
          echo "<tr>";
            echo "<td>". $row["id"]. "</td>";
            echo "<td>". $row["name"]. "</td>";
            echo "<td>". $row["type"]. "</td>";
            echo "<td>". $row["model"]. "</td>";
            echo "<td>". $row["brand"]. "</td>";
          echo "</tr>";
        }
        echo "<tr>";
          echo "<th colspan='5' class='text-center' >". "test". "</th>";
        echo "</tr>";
      } else {
        echo "<tr><td colspan='4'>No records found.</td></tr>";
      }
  }

  function addData () {
      global $row;
      global $result;
    $data = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
  }

  // showData()
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Motor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/gardevoir" />
    <!-- style dibawah digunakan ketika ingin menggunakan class yang sama, agar tidak perlu menulisnya berulang2 -->
    <style>
      .contohStyle {
        background-color: yellow;
        font-weight: bolder;
      }
    </style>
</head>
<body>

  <header class="text-uppercase fs-1 fw-bold text-center  ">daftar motor pondok teknologi indonesia</header>

  <!-- <table class="table table-striped-columns"> -->
  <!-- menambahkan striping / highlight pada tiap column -->
  <table class="table table-bordered table-striped">  
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Type</th>
        <th scope="col">Model</th>
        <th scope="col">Brand</th>
      </tr>
    </thead>
    <tbody>

  
      <?php 
  
        $sql = "SELECT * FROM motor";
        $result = mysqli_query($cnt, $sql);

        showData();
  
        // if (mysqli_num_rows($result) > 0 ){
          // while( $row = mysqli_fetch_assoc($result)){
            // echo "<tr>";
              // echo "<td>". $row["id"]. "</td>";
              // echo "<td>". $row["name"]. "</td>";
              // echo "<td>". $row["type"]. "</td>";
              // echo "<td>". $row["model"]. "</td>";
              // echo "<td>". $row["brand"]. "</td>";
            // echo "</tr>";
          // }
          // echo "<tr>";
            // echo "<th colspan='5' class='text-center' >". "test". "</th>";
          // echo "</tr>";
        // } else {
          // echo "<tr><td colspan='4'>No records found.</td></tr>";
        // }
      ?>
    </tbody>
  </table>

  <!-- <div class="mx-auto ps-5 ">Elemen dengan padding kiri dan kanan 5</div> -->

  <!-- <header class="container-xxl m-1 ps-5 text-uppercase fs-4 fw-semibold text-center bg-primary text-light ">tambahkan data</header> -->

  <div class="container text-center">
    <div class="row align-self-start ">
      <span class=" col-auto input-group-text flex-nowrap mb-3 mx-auto ">Name</span>
      <div class="ps-0 col">
        <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
      </div>
    </div>

    <div class="row align-self-start ">
      <span class=" col-auto input-group-text flex-nowrap mb-3 mx-auto ">Type</span>
      <div class="ps-0 col">
        <input type="text" class="form-control" placeholder="Type" aria-label="Name" aria-describedby="basic-addon1">
      </div>
    </div>

    <div class="row align-self-start ">
      <span class=" col-auto input-group-text flex-nowrap mb-3 mx-auto ">Model</span>
      <div class="ps-0 col">
        <input type="text" class="form-control" placeholder="Model" aria-label="Name" aria-describedby="basic-addon1">
      </div>
    </div>

    <div class="row align-self-start ">
      <span class=" col-auto input-group-text flex-nowrap mb-3 mx-auto ">Brand</span>
      <div class="ps-0 col">
        <input type="text" class="form-control" placeholder="Brand" aria-label="Name" aria-describedby="basic-addon1">
      </div>
    </div>

  </div>

    <!-- <div class="ps-5 ms-5 col-6 d-grid gap-2 mx-auto "></div> -->
    <div class="d-grid gap-2 d-md-block col-1 mx-auto p-5">
      <button type="button" class="btn btn-outline-primary">Primary</button>
    </div>


  <!-- <div class="container input-group mb-3"> -->
    <!-- <button type="button" class="btn btn-primary">Primary</button> -->
  <!-- </div> -->

  <!-- </div> -->
<!--  -->
  <!-- <div class="container input-group mb-3" > -->
    <!-- <span class="col-md-1 input-group-text " id="basic-addon1">Name</span> -->
    <!-- <div class="col-3"> -->
      <!-- <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1"> -->
    <!-- </div> -->
  <!-- </div> -->
<!--  -->
  <!-- <div class="container input-group mb-3" > -->
    <!-- <div class="text-center col-md-1  " > -->
      <!-- <span class="input-group-text " id="basic-addon1">Type</span> -->
    <!-- </div> -->
    <!-- <div class="col-3"> -->
      <!-- <input type="text" class="form-control" placeholder="Type" aria-label="Type" aria-describedby="basic-addon1"> -->
    <!-- </div> -->
  <!-- </div> -->
<!--  -->
  <!-- <div class="container input-group mb-3" > -->
    <!-- <div class="text-center col-md-1 " > -->
      <!-- <span class="input-group-text " id="basic-addon1">Model</span> -->
    <!-- </div> -->
    <!-- <div class="col-3"> -->
      <!-- <input type="text" class="form-control" placeholder="Model" aria-label="Model" aria-describedby="basic-addon1"> -->
    <!-- </div> -->
  <!-- </div> -->
<!--  -->
  <!-- <div class="container input-group mb-3" > -->
    <!-- <div class="text-center col-md-1 " > -->
      <!-- <span class="input-group-text " id="basic-addon1">Brand</span> -->
    <!-- </div> -->
    <!-- <div class="col-3"> -->
      <!-- <input type="text" class="form-control" placeholder="Brand" aria-label="Brand" aria-describedby="basic-addon1"> -->
    <!-- </div> -->
  <!-- </div> -->
<!--  -->
  <!-- <div class="container input-group mb-3"> -->
    <!-- <button type="button" class="btn btn-primary">Primary</button> -->
  <!-- </div> -->

  <!-- <div class="container"> -->
    <!-- <form> -->
        <!-- <div class="row"> -->
            <!-- <div class="col-4"> -->
                <!-- <input type="text" class="form-control" placeholder="First Name"> -->
            <!-- </div> -->
            <!-- <div class="col-4"> -->
                <!-- <input type="text" class="form-control" placeholder="Last Name"> -->
            <!-- </div> -->
            <!-- <div class="col-4"> -->
                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            <!-- </div> -->
        <!-- </div> -->
    <!-- </form> -->
  <!-- </div> -->

  <!-- <div class="input-group mb-3" > -->
    <!-- <span class="input-group-text" id="basic-addon1">Type</span> -->
    <!-- <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"> -->
  <!-- </div> -->


</body>
</html>


<!-- MENAMPILKAN DATA DARI DATABASE MENGGUNAAN QUERY -->
<?php
// 
// $sql = "SELECT * FROM motor";
// $result = $cnt->query($sql);
// $result = mysqli_query($cnt, $sql);
// 
// if (mysqli_num_rows($result) > 0 ){
  // while( $row = mysqli_fetch_assoc($result)){
    // echo "name: ". $row["name"]. "<br>";
    // echo "type: ". $row["type"]. "<br>";
    // echo "model: ". $row["model"]. "<br>";
    // echo "brand: ". $row["brand"]. "<br>";
    // echo "brand : ". $row["brand"]. "<br>";
  // }
// } else {
  // echo "0 result";
// }
// 
?>