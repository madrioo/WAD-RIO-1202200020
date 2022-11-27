<?php
require './connector.php';

$id = $_GET['id'];

$sql = "DELETE FROM showroom_rio_table WHERE id_mobil = $id";

if (mysqli_query($connection, $sql)) {
  header("location: ../pages/ListCar-Rio.php");
} else {
  echo "Lost";
}
