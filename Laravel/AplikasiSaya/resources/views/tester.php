<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Dashboard</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/gardevoir" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <!-- <script src="https://kit.fontawesome.com/a9fb9773a1.js" crossorigin="anonymous"></script> -->
  <link rel="stylesheet" href="./View/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
  <style>
    * {
        font-family: 'Ubuntu', sans-serif;
    }
    
    .container {
        display: flex;
        min-height: 100vh;
        min-width: 100vw;
        background-color: lightgray;
    }
    
    .sidebar {
        /* background-color: #111827;  */
        background-color: white; 
        border-right: 0.5px solid;
        border-color: gray;
        width: 400px;
        /* padding-top: 25px; */
        padding: 24px;
        /* display: flex-; */
        box-sizing: border-box;
    }
    
    .main {
        /* background-color: yellow; */
        flex-grow: 1;
        margin-top: 10px;
        /* margin-bottom: 10px; */
        padding-top: 5px;
        /* padding-bottom: 10px; */
        border-top: 10px;
    }
    
    /* .main:hover { */
        /* background: orange; */
        /* transition: all ease-in .2s; */
    /* } */
    
    .sidebar .description-header {
        font-style: normal;
        font-weight: normal;
        /* font-weight: 700; */
        font-size: 16px;
        line-height: 16px;
        text-align: center;
        /* color: #FFFFFF; */
        /* display: flexbox; */
        /* align-items: center; */
    }
    
    .sidebar a {
        text-decoration: none;
        color: black;
        font-weight: bold;
        /* align-items: center; */
    }
    
    .sidebar .icon {
        width: 25px;
        margin-right: 12px;
        /* color: red; */
    } 
    
    .sidebar .header .list-item {
        display: flex;
        /* flex-direction: row; */
        /* align-items: center; */
        /* padding: 12px 10px; */
        /* border-radius: 8px; */
        /* background-color: aqua; */
        /* height: 40px; */
        /* box-sizing: border-box; */
    }
    
    .sidebar .main .list-item {
        display: flex;
        flex-direction: row;
        /* align-items: center; */
        padding: 12px 10px;
        width: 212px;
        box-sizing: border-box;
        /* border-radius: 50px; */
        /* margin-top: 12px; */
        /* margin-bottom: 12px; */
    }
    
    .sidebar .main .list-item:hover {
        background: orange;
        transition: all ease-in .2s;
    }
    
    .sidebar .main .coll .btn:hover {
        background: orange;
        transition: all ease-in .2s;
    }
    
    .sidebar .main .coll .coll .ul .coll-list:hover {
        background: orange;
        transition: all ease-in .2s;
    }
    
    .sidebar .main .coll .btn{
        font-weight: bold;
        padding: 0;
    }
    
    .sidebar .main .coll {
        /* mb-1 bg-warning; */
        /* margin-top: 1; */
        /* margin-bottom: 1; */
        /* background: lightgreen; */
        /* display: flex; */
        /* flex-direction: row; */
        /* align-items: center; */
        padding: 12px 10px;
        width: 212px;
        box-sizing: border-box;
    }
    
    .sidebar .main .coll .ul {
        background-color: lightblue;
    }
    
    .sidebar .main .coll-list {
        /* margin-top: 5px; */
        /* margin: 6px 10px 6px; */
        padding: 6px 12px 6px;
        /* background-color: lightblue; */
    }
    
    .sidebar .main .list-item .description {
        font-size: 16px;
    }
    
    .main-content {
        background-color: lightsalmon;
        /* display: flex; */
        min-height: 100vh;
        min-width: 100vw;
    }
    
    
    
    /* main content */
    /* .container .main-content { */
        /* width: 100%; */
        /* height: 100%; */
        /* background-color: aqua; */
    /* } */
    .main-content .menu-option-1 a {
        text-decoration: none;
        color: black;
        font-weight: bold;
    }
    
    .main-content .menu-option-2 a {
        text-decoration: none;
        color: black;
        font-weight: bold;
    }
    
    .main-content .menu-option-1 {
        border-bottom: 4px solid lightblue;
    }
    
    /* .main-content .menu-option .description {
        border-color: red;
    
    .main-content .menu-option a:hover {
        color: lightblue;
        border-bottom: 2px solid red;
    } */
  </style>
</head>

<body>

  <div class="container flex-row m-0 p-0">
    <!-- <h1>this is container</h1> -->

    <div class="sidebar">
      <div class="header">
        <div class="list-item ">
          <a href="#" class="">
            <img src="./Images/klinikPintar.png" alt="" class="icon " style="width: 50px">
            <!-- <span class="description-header ">Klinik Berkah Bermanfaat</span> -->
          </a>
          <a href="#" class="">
            <span class="description-header ">Klinik Berkah Bermanfaat</span>
          </a>
        </div>
        <!-- <div class="illustration"> -->
        <!-- <img src="./Images/8401.jpg" style="width: 200px" alt=""> -->
        <!-- </div> -->
      </div>

      <div class="main ">
        <div class="list-item " style="border: solid 10px 10px black;">
          <a href="#">
            <img src="./Images/Icons/dashboard.svg" alt="" class="icon">
            <span class="description" style="border: solid 10px 10px black;">Dashboard</span>
          </a>
        </div>

        <div class="coll collapse.show">
          <a href="#">
            <img src="./Images/Icons/rawatjalan.svg" alt="" class="icon">
            <button class="btn btn-toggle rounded border-0 collapsed " data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
              Rawat Jalan
            </button>
          </a>
          <div class="coll collapse" id="home-collapse">
            <ul class="ul btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="coll-list link-body-emphasis d-inline-flex text-decoration-none rounded">Semua Status</a></li>
              <li><a href="#" class="coll-list link-body-emphasis d-inline-flex text-decoration-none rounded">Reservasi</a></li>
              <li><a href="#" class="coll-list link-body-emphasis d-inline-flex text-decoration-none rounded">Registrasi</a></li>
            </ul>
          </div>
        </div>

        <div class="list-item ">
          <a href="#">
            <img src="./Images/Icons/rekammedis.png" alt="" class="icon">
            <span class="description">Rekam Medis</span>
          </a>
        </div>
        <div class="list-item ">
          <a href="#">
            <img src="./Images/Icons/pembayaran.svg" alt="" class="icon">
            <span class="description">Pembayaran</span>
          </a>
        </div>
        <div class="list-item ">
          <a href="#">
            <img src="./Images/Icons/masterdata.png" alt="" class="icon">
            <span class="description">Master Data</span>
          </a>
        </div>
        <div class="list-item ">
          <a href="#">
            <img src="./Images/Icons/jadwaldokter.svg" alt="" class="icon">
            <span class="description">Jadwal Dokter</span>
          </a>
        </div>
        <div class="list-item ">
          <a href="#">
            <img src="./Images/Icons/pasien.svg" alt="" class="icon">
            <span class="description">Pasien</span>
          </a>
        </div>
        <div class="list-item ">
          <a href="#">
            <img src="./Images/Icons/inventori.svg" alt="" class="icon">
            <span class="description">Inventori</span>
          </a>
        </div>
        <div class="list-item ">
          <a href="#">
            <img src="./Images/Icons/closing.svg" alt="" class="icon">
            <span class="description">Closing & Laporan</span>
          </a>
        </div>
        <div class="list-item ">
          <a href="#">
            <img src="./Images/Icons/integrasi.svg" alt="" class="icon">
            <span class="description">Integrasi</span>
          </a>
        </div>
      </div>
    </div>

    <!-- <div class="main-content container d-flex flex-row p-5 p-0" style="width: 500px; height: 10px; background-color:yellow;"> -->
    <!-- <nav aria-label="breadcrumb" class="flex-grow-1" style="--bs-breadcrumb-divider: '>';"> -->
    <!-- <ol class="breadcrumb fw-bold " style=""> -->
    <!-- <li class="breadcrumb-item " style="text-decoration: none;"><a href="#" class="text-decoration-none text-black">Rawat Jalan</a></li> -->
    <!-- <li class="breadcrumb-item active text-black" aria-current="page">Semua Status</li> -->
    <!-- </ol> -->
    <!-- </nav>       -->
    <!-- <button type="button" class="btn btn-primary" style="height: 50px" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-original-title="" title=""> -->
    <!-- Lihat Panduan -->
    <!-- </button> -->
    <!--  -->
    <!-- <div class="d-flex flex-column"> -->
    <!-- <div class="p-2">Komponen 1</div> -->
    <!-- <div class="p-2">Komponen 2</div> -->
    <!-- </div> -->
    <!--  -->
    <!-- </div>  -->

    <div class="main-content container d-flex flex-column p-5 p-0" style="width: 500px; height: 10px; background-color: #f1f1f1;">
      <div class="d-flex flex-row">
        <nav aria-label="breadcrumb" class="flex-grow-1" style="--bs-breadcrumb-divider: '>';">
          <ol class="breadcrumb fw-bold " style="">
            <li class="breadcrumb-item " style="text-decoration: none;"><a href="#" class="text-decoration-none text-black">Rawat Jalan</a></li>
            <li class="breadcrumb-item active text-black" aria-current="page">Semua Status</li>
          </ol>
        </nav>
        <button type="button" class="btn btn-primary rounded-0" style="height: 50px" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="left" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-bs-original-title="" title="">
          Lihat Panduan
        </button>
      </div>

      <br>

      <div class="d-flex flex-row">
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle rounded-0 ms-1" style="width: 250px; background-color: white; color: black;" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            Tipe Pembayaran
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">e-Money</a></li>
            <li><a class="dropdown-item" href="#">Bank Transfer</a></li>
            <li><a class="dropdown-item" href="#">Cash</a></li>
          </ul>
        </div>

        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle rounded-0 ms-1" style="width: 250px; background-color: white; color: black;" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            Poliklinik
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">Poli Gigi</a></li>
            <li><a class="dropdown-item" href="#">Poli Umum</a></li>
          </ul>
        </div>

        <div class="dropdown me-auto">
          <button class="btn btn-primary dropdown-toggle dropdown-toggle-split rounded-0 ms-1 " style="width: 250px; background-color: white; color: black; " type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            Dokter
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="#">Dr. Vania Utami</a></li>
            <li><a class="dropdown-item" href="#">Dr. Pitoyo</a></li>
          </ul>
        </div>


        <button type="button" class="btn btn-primary rounded-0" data-bs-toggle="modal" data-bs-target="#example">
          Reservasi
        </button>
        <div class="modal" tabindex="-1" id="example">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Modal body text goes here.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <br>

      <div class="d-flex flex-row border-bottom border-secondary border-opacity-25" >
        <div class="menu-option-1 p-3">
          <a href="#">
            <span class="description">Semua Rawat Jalan</span>
          </a>
        </div>
        <div class="menu-option-2 p-3" style="">
          <a href="#">
            <span class="description">Tindak Lanjut</span>
          </a>
        </div>
      </div>


      <div class="d-flex flex-row mb-3">
        <input type="hari" class="form-control" id="hari" placeholder="Semua Hari">
        <input type="rumah sakit" class="form-control" id="exampleFormControlInput1" placeholder="Cari MRN, pasien, dokter, kode poli...">
        <input type="user" class="form-control" id="exampleFormControlInput1" placeholder="Cari no rujukan, no voucher...">
      </div>

      <!-- <table class="table"> -->
        <!-- <thead> -->
          <!-- <tr> -->
            <!-- <th scope="col">WAKTU KONSULTASI</th> -->
            <!-- <th scope="col">ANTRIAN (SLOT)</th> -->
            <!-- <th scope="col">PASIEN</th> -->
            <!-- <th scope="col">POLI</th> -->
            <!-- <th scope="col">DOKTER</th> -->
            <!-- <th scope="col">STATUS</th> -->
          <!-- </tr> -->
        <!-- </thead> -->
        <!-- <tbody> -->
          <!-- <tr> -->
            <!-- <td>waktu_konsultasi</td> -->
            <!-- <td>nomer_antrian</td> -->
            <!-- <td>nama_pasien</td> -->
            <!-- <td>poli</td> -->
            <!-- <td>dokter</td> -->
            <!-- <td>status</td> -->
          <!-- </tr> -->
        <!-- </tbody> -->
      <!-- </table> -->

      <!-- <div class="d-flex p-2 bg-white fw-bold">
        <div class="d-flex flex-row mb-3">
          <div class="p-2">WAKTU KONSUL</div>
          <div class="p-2">ANTRIAN (SLOT)</div>
          <div class="p-2">PASIEN</div>
        </div>
      </div> -->

      <!-- end of main-content -->
      </br>

</body>

</html>