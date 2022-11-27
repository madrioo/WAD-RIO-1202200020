<?php
session_start();

include 'connector.php';

if(isset($_POST['btn-simpan'])){
    $namamobil = $_POST['nama'];
    $pemilik = $_POST['pemilik'];
    $merk = $_POST['merk'];
    $tanggalbeli = $_POST['tanggalbeli'];
    $desc = $_POST['desc'];
    $status = $_POST['status'];
    $gambar = $_FILES['gambar']['name'];
    $target = "../asset/images/";
    
    if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $gambar)) {
      $sql = "INSERT INTO showroom_rio_table (nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$namamobil', '$pemilik', '$merk', '$tanggalbeli', '$desc', '$gambar', '$status')";
      if (mysqli_query($connection, $sql)) {
        header("location: ../pages/ListCar-Rio.php?pesan=Success");
      } else {
        header("location: ../pages/ListCar-Rio.php?pesan=Failed");
      }
    } else {
      header("location: ../pages/ListCar-Rio.php?pesan=Failed Again");
    }
  }


if(isset($_POST['btn-register'])){
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = $_POST['password'];
    $confirm = $_POST['KonfirmasiPassword'];
    $NoHp = $_POST['NoHp'];

    if($password != $confirm){
	    echo "<script>alert ('Wrong Password'); document.location.href = '../pages/Register-Rio.php'</script>";
    }
    $emailvalid = mysqli_query($connection, "select email from users where email = '$email'");
    $emailExist = mysqli_fetch_array($emailvalid, MYSQLI_NUM);

    if ($emailExist>0){
        echo "<script>alert ('email yang dimasukan sudah pernah digunakan sebelumnya'); document.location.href = '../pages/Register-Rio.php'</script>";
    } else {
        $insertUsers=mysqli_query($connection,"insert into users values('','$name','$email','$password', '$NoHp')");
        if($insertUsers){
            echo "<script>alert ('proses registrasi kamu berhasil'); document.location.href = '../pages/Login-Rio.php'</script>";
        }else{
        echo 'data gagal terinput';
        }    
    } 
}

?>