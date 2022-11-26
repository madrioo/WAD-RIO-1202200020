<?php
require './config/connector.php';

$query = "SELECT * FROM showroom_rio_table";
$result = mysqli_query($connection, $query);

function onClick($result)
{
  if (mysqli_num_rows($result) > 0) {
    header("Location: ./pages/ListCar-Rio.php");
  } else {
    header("Location: ./pages/Add-Rio.php");
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Home | Rio_1202200020</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="asset/vendor/aos/aos.css" rel="stylesheet">
    <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="asset/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <style>
    <?php include 'asset/style/index.css'; ?>
  </style>
</head>

<body>
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav gap-3">
          <a class="nav-link" style="color: white;" href="#home">Home</a>
          <a class="nav-link" href="<?php if (mysqli_num_rows($result) > 0) {
                                      echo "./pages/ListCar-Rio.php";
                                    } else {
                                      echo "./pages/Add-Rio.php";
                                    } ?>">MyCar</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Jumbotron -->
  <section id="home">
    <div class="container">
      <div class="d-flex gap-5 rap justify-content-center align-items-center">
        <div>
          <h1>Selamat Datang Di<br /> Show Room Rio</h1>
          <p class="mt-3">Sewa mobil praktis tanpa ribet, mudah & cepat</p>
          <a href="<?php if (mysqli_num_rows($result) > 0) {
                      echo "./pages/ListCar-Rio.php";
                    } else {
                      echo "./pages/Add-Rio.php";
                    } ?>" class="button btn-primary">MyCar</a>
          <div class="d-flex align-items-center gap-5 mt-5">
            <img src="<?php echo "asset/images/logo-ead.png" ?>" alt="logoead" style="width:100px;">
            <p style="margin-top: 20px; font-size:15px;">Rio_1202200020</p>
          </div>
        </div>
        <img src="<?php echo "asset/images/jumbotron.png" ?>" alt="jumbotron">
      </div>
    </div>
  </section>
  <!-- Jumbotron End -->

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