<?php
$connection = new mysqli("localhost", "root", "", "modul_3");

if (!$connection) {
  die("Connection Lost: " . $connection->connect_error);
}
