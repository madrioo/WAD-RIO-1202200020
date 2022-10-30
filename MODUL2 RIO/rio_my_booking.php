<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"/>

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"rel="stylesheet"/>

    <!-- css -->
    <link rel="stylesheet" href="style.css"/>

    <title>EAD Rent</title>
  </head>
  <body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav m-auto">
            <a class="nav-link" href="rio_home.php">Home</a>
            <a class="nav-link" href="rio_my_booking.php">Booking</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Total -->
    <?php 
    $name = $_POST['name'];
    $in =$_POST['check-in'];
    $duration = $_POST['duration'];
    $out = date('Y-m-d', strtotime( $in. +$duration. 'days'));
    $type = $_POST['type'];
    $rent=0;
    if($type=="nissan r34"){
      $rent=5000000;
    }
    if($type=="nissan r33"){
      $rent=5500000;
    }
    if($type=="nissan nismo"){
      $rent=6000000;
    }

    $phone = $_POST['Phone'];
    if(isset($_POST['services'])){
      $layanan = $_POST['services'];
      $count = count($layanan);
      $price = 0;
      for ($total=0; $total < $count; $total++) { 
        if($layanan[$total]=="Health Protocol"){
          $price = $price + 25000;
        }
        if($layanan[$total]=="Driver"){
          $price = $price + 100000;
        }
        if($layanan[$total]=="Fuel Filled"){
          $price = $price + 250000;
        }
      }
    }

    $price = ($rent * $duration) + $price;
    ?>
    
    <!-- Result -->
   <div class="container-fluid mt-3 mb-2 text-center">
        <h1 class="text-uppercase fw-bold">thank you Muh Ario Adriansyah Wuleho_1202200020</h1>
        <p class="fw-light">Please double check your reservation details</p>
      <table class="table">
  <thead style="font-size: 16px;" class="text-center">
    <tr>
      <th scope="col">Booking Number</th>
      <th scope="col">Name</th>
      <th scope="col">Check In</th>
      <th scope="col">Check Out</th>
      <th scope="col">Car Type</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Service(s)</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody style="font-size: 14px;" class="text-center">
    <tr>
      <td scope="row"><?php echo rand()?></td>
      <td><?php echo $name ?></td>
      <td><?php echo date('D F Y', strtotime($in)) ?></td>
      <td><?php echo date('D F Y', strtotime($out)) ?></td>
      <td><?php 
      echo $type ?></td>
      <td><?php echo $phone ?></td>
      <td><ul>
        <?php 
          if(!empty($_POST['services'])){
            foreach ($_POST['services'] as $services) {
            echo "<li>".$services."</li>";
          }
          
          }else{
            echo "no services";
          }
        ?>
      </ul></td>
      <td><?php echo "Rp. ", number_format($price,2,".",",") ?></td>
    </tr>
  </tbody>
</table>
   </div>

            <!-- ======= Footer ======= -->
            <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
        <div class="container footer-bottom clearfix">
            <div class="copyright text-center">&copy; Copyright <strong><span>Muh Ario Adriansyah Wuleho</span></strong>. All Rights Reserved</div>
            <div class="credits text-center">Created by <a href="https://github.com/madrioo">Muh Ario Adriansyah Wuleho_1202200020_SI4402</a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
