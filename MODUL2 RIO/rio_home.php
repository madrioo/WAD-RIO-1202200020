<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"rel="stylesheet"/>

    <!-- css -->
    <link rel="stylesheet" href="style.css" />

    <title>EAD Rent</title>
  </head>
  <body>
    <!-- navbar -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid m-auto">
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
          <div class="navbar-nav m-auto">
            <a class="nav-link" href="rio_home.php">Home</a>
            <a class="nav-link" href="rio_booking.php">Booking</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- card -->
    <div class="container mt-3 mb-2 text-center">
        <h1 class="title fw-bold">WELCOME TO EAD RENT</h1>
        <p class="desc fw-light">Find your best deal, here</p>
      
        <div class="listMobil">
        <div class="row">
          <div class="col-sm-4 d-flex justify-content-center mb-3">
            <div class="card" style="width: 18rem">
              <img src="./assets/img/nissan-r34.jpg" class="card-img-top" alt="Nissan-r34" width="318px" height="212px"/>
              <div class="card-body">
                <h5 class="card-title fw-bold">Nissan R34</h5>
                <p class="card-text">Rp. 5.000.000 / Day</p>
              </div>
              <ul class="list list-flush fw-bold text-center">
                <li class="item-list d-flex justify-content-center">2 Kursi</li>
                <li class="item-list d-flex justify-content-center">2500 CC</li>
                <li class="item-list d-flex justify-content-center">Manual</li>
              </ul>
              <div class="card-body booking d-flex justify-content-center">
                <a href="rio_booking.php" class="card-link"><button type="button" class="btn btn-primary">Booking Now!</button></a>
              </div>
            </div>
          </div>

          <div class="col-sm-4 d-flex justify-content-center mb-3">
            <div class="card" style="width: 18rem">
              <img src="./assets/img/nissan-r33.jpg" class="card-img-top" alt="Nissan-r33" width="318px" height="212px"/>
              <div class="card-body">
                <h5 class="card-title fw-bold">Nissan R33</h5>
                <p class="card-text">Rp. 5.500.000 / Day</p>
              </div>
              <ul class="list list-flush fw-bold text-center">
                <li class="item-list d-flex justify-content-center">2 Kursi</li>
                <li class="item-list d-flex justify-content-center">2200 CC</li>
                <li class="item-list d-flex justify-content-center">Automatic</li>
              </ul>
              <div class="card-body booking d-flex justify-content-center">
                <a href="rio_booking.php" class="card-link"><button type="button" class="btn btn-primary">Booking Now!</button></a>
              </div>
            </div>
          </div>

          <div class="col-sm-4 d-flex justify-content-center mb-3">
            <div class="card" style="width: 18rem">
              <img src="./assets/img/nissan-nismo.jpg" class="card-img-top" alt="Nissan Nismo" width="318px" height="212px"/>

              <div class="card-body">
                <h5 class="card-title fw-bold">Nissan Nismo</h5>
                <p class="card-text">Rp. 6.000.000 / Day</p>
              </div>
              <ul class="list list-flush fw-bold text-center">
                <li class="item-list d-flex justify-content-center">2 Kursi</li>
                <li class="item-list d-flex justify-content-center">3000 CC</li>
                <li class="item-list d-flex justify-content-center">Manual</li>
              </ul>

              <div class="card-body booking d-flex justify-content-center">
                <a href="rio_booking.php" class="card-link"><button type="button" class="btn btn-primary">Booking Now!</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

        <!-- ======= Footer ======= -->
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
