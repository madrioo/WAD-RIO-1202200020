<?php
$connection = new mysqli("localhost", "root", "", "wad_modul4");

if (!$connection) {
  die("Connection Lost: " . $connection->connect_error);
}
