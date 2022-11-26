<?php
require '../config/connector.php';

$id = $_GET['id'];

$sql = "SELECT * FROM showroom_rio_table WHERE id_mobil = $id";

$result = mysqli_query($connection, $sql);
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <title>Edit Car | Rio_1202200020</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="asset/vendor/aos/aos.css" rel="stylesheet">
    <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="asset/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="asset/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
  <style>
    <?php include '../asset/style/index.css'; ?>
  </style>
</head>

<body>
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav gap-3">
          <a class="nav-link" href="../index.php">Home</a>
          <a class="nav-link" style="color: white;" href="#">MyCar</a>
        </div>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Form Start -->
  <section id='detail'>
    <div class="container">
      <?php
      while ($obtainData = mysqli_fetch_array($result)) {
        echo "
                <h1 class='add'>" . $obtainData["nama_mobil"] . "</h1>
                <p class='addparagraf'>Detail Mobil " . $obtainData["nama_mobil"] . "</p>
                <div class='d-flex justify-content-center align-items-start gap-5 mt-5'>
                  <img src='../asset/images/" . $obtainData["foto_mobil"] . "' alt='foto_mobil'>
                  <form action='../config/edit.php?id=" . $obtainData["id_mobil"] . "' method='POST' enctype='multipart/form-data'>
                    <label for='nama'>Nama Mobil</label>
                    <input type='text' id='nama' name='nama' value='" . $obtainData["nama_mobil"] . "' >
                    <label for='pemilik'>Nama Pemilik</label>
                    <input type='text' id='pemilik' name='pemilik' value='" . $obtainData["pemilik_mobil"] . "' >
                    <label for='merk'>Merk</label>
                    <input type='text' id='merk' name='merk' value='" . $obtainData["merk_mobil"] . "' >
                    <label for='tanggalbeli'>Tanggal Beli</label>
                    <input type='date' id='tanggalbeli' name='tanggalbeli' value='" . $obtainData["tanggal_beli"] . "' >
                    <label for='desc'>Deskripsi</label>
                    <textarea id='desc' name='desc' style='height:200px; width: 600px; border-radius: 8px;' > " . $obtainData["deskripsi"] . " </textarea>
                    <label for='inputGroupFile01'>Foto</label>
                    <input type='file' class='form-control' id='inputGroupFile01' value='" . $obtainData["foto_mobil"] . "' name='gambar' style='height: 40px;'>
                    <label for='status'>Status Pembayaran</label>
                    <span class='d-flex'>
                      <input type='radio' name='status' id='lunas' value='Lunas' " . (($obtainData["status_pembayaran"] == 'Lunas') ? 'checked="checked"' : "") . " style='width: 15px; height: 15px; margin-right:10px;'>
                      <label for='lunas' style='margin-top: 15px; margin-right:10px;'>Lunas</label>
                      <input type='radio' name='status' id='belum' value='Belum Lunas' " . (($obtainData["status_pembayaran"] == 'Belum Lunas') ? 'checked="checked"' : "") . " style='width: 15px; height: 15px; margin-right:10px;'>
                      <label for='belum' style='margin-top: 15px;'>Belum Lunas</label>
                    </span>
                    <button type='submit' class='btn btn-primary' style='margin-top: 40px;'>Selesai</button>
                  </form>
                </div>
            ";
      }
      ?>
    </div>
  </section>
  <!-- Form End -->

  <div class="container">
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-animation="true" data-delay="5000" data-autohide="false">
    <div class="toast-header">
        <span class="rounded mr-2 bg-warning" style="width: 15px;height: 15px"></span>

        <strong class="mr-auto">Alert</strong>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
    </div>
    <div class="toast-body">
        Data Berhasil diupdate.
    </div>
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

  <script src="asset/js/jquery.js"></script>
    <script src="asset/js/popper.js"></script>
    <script src="asset/js/bootstrap.js"></script>


    <script>
        $('.toast').toast('show');
    </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>