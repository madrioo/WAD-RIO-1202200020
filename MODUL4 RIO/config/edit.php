<?php
require './connector.php';

$id = $_GET['id'];
$namamobil = $_POST['nama'];
$pemilik = $_POST['pemilik'];
$merk = $_POST['merk'];
$tanggalbeli = $_POST['tanggalbeli'];
$desc = $_POST['desc'];
$status = $_POST['status'];
$gambar = $_FILES['gambar']['name'];

$target = "../asset/images/";

if ("SELECT foto_mobil FROM showroom_rio_table WHERE id_mobil = $id" != 0) {
  if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $gambar)) {
    $editquery = "UPDATE showroom_rio_table SET nama_mobil = '$namamobil', pemilik_mobil = '$pemilik', merk_mobil = '$merk', tanggal_beli = '$tanggalbeli', deskripsi = '$desc', foto_mobil = '$gambar', status_pembayaran = '$status' WHERE id_mobil = $id";
    if (mysqli_query($connection, $editquery)) {
      header("location: ../pages/ListCar-Rio.php?pesan=edit");
    } else {
      header("location: ../pages/ListCar-Rio.php?pesan=failed");
    }
  } else {
    header("location: ../pages/ListCar-Rio.php?pesan=failed");
  }
} else {
  $editquery = "UPDATE showroom_rio_table SET nama_mobil = '$namamobil', pemilik_mobil = '$pemilik', merk_mobil = '$merk', tanggal_beli = '$tanggalbeli', deskripsi = '$desc', status_pembayaran = '$status' WHERE id_mobil = $id";
  if (mysqli_query($connection, $editquery)) {
    header("location: ../pages/ListCar-Rio.php?pesan=edit");
  } else {
    header("location: ../pages/ListCar-Rio.php?pesan=failed");
  }
}
