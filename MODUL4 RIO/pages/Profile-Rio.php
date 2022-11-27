<?php
session_start();  
include '../config/connector.php';

    
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Home | Rio_1202200020</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="../asset/vendor/aos/aos.css" rel="stylesheet">
    <link href="../asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../asset/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include 'asset/style/index.css'; ?>
  </style>
</head>

    <title>Profile | Rio_1202200020</title>
  </head>

  <body>
<!-- Navbar Start -->
    <?php
    $getUser = mysqli_query($connection, "select * from users");
    while($dataUser = mysqli_fetch_array($getUser)){
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
     
      <div class="container">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link" href="../index.php">Home</a>
            <a class="nav-link" href="../pages/ListCar-Rio.php">MyCar</a>
          </div>
        </div>
        <div class="d-flex">
          <a href="../pages/Add-Rio.php">
          <button class="btn btn-outline-dark" type="submit" style="color: white;">add car</button></a>
          <div class="dropdown ms-4">
            <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo $dataUser['nama'];?>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="../pages/Profile-Rio.php">Profile</a></li>
              <li><a class="dropdown-item" href="../config/logout.php">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <!-- Navbar End -->

    <!-- Form Start -->
    <section id="insert">
      <div class="container insert">
        
        <h1 class="titleInsert" align="center">Profile</h1>
        <form enctype="multipart/form-data" method="POST" action="../config/update.php" class="form-input" name="form-edit">
            <input type="hidden" name="id" value="<?php echo $dataUser['id'];?>">
          <div class="mb-3">
            <label for="inputNamaMobil" class="form-label">Email</label>
            <input
              type="text"
              class="form-control"
              value="<?php echo $dataUser['email'];?>"
              name="email"
              disabled
            />
          </div>
          <div class="mb-3">
            <label for="inputNamaPemilik" class="form-label"
              >Nama</label
            >
            <input
              type="text"
              class="form-control"
              value="<?php echo $dataUser['nama'];?>"
              name="nama"
              required
            />
          </div>
          <div class="mb-3">
            <label for="inputMerk" class="form-label">Nomor handphone</label>
            <input
              type="text"
              class="form-control"
              value="<?php echo $dataUser['no_hp'];?>"
              name="no_hp"
              required
            />
          </div>

          <div class="mb-3">
            <label for="inputTanggalBeli" class="form-label"
              >Kata sandi</label
            >
            <input type="password" class="form-control" name="password" placeholder="masukan kata sandi..." required />
          </div>
          <div class="mb-3">
            <label for="inputMerk" class="form-label">Konfirmasi password</label>
           <input type="password" class="form-control" name="konfirmasiPassword" placeholder="Ulangi kata sandi..." required />
          </div>
            
          <div class="mb-3 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary" name="btn-update" >Update</button>
          </div>
        </form>
      </div>
    </section>
    <!-- End Form -->
    <?php
    }
    ?>
    <div class="d-flex align-items-center gap-5 mt-5" align="center">
    <img src="<?php echo "../asset/images/logo-ead.png" ?>" alt="logoead" style="width:100px;">
            <p style="margin-top: 20px; font-size:15px;">Rio_1202200020</p>
    </div> 

  <!-- Footer Start -->
  <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
        <div class="container footer-bottom clearfix">
            <div class="copyright text-center">
                &copy; Copyright <strong><span>Muh Ario Adriansyah Wuleho</span></strong>. All Rights Reserved
            </div>
            <div class="credits text-center">
                Created by <a href="https://github.com/madrioo">Muh Ario Adriansyah Wuleho_1202200020_SI4402</a>
            </div>
        </div>
    </footer>
  <!-- Footer Start -->

  <!-- Floating WA Start -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://api.whatsapp.com/send/?phone=6282235742048&text&type=phone_number&app_absent=0" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
  <!-- Floating WA Start -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
