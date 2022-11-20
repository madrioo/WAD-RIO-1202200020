<?php
$connection = new mysqli("localhost", "root", "", "modul3");

if (!$connection) {
  die("Connection Lost: " . $connection->connect_error);
}
