<?php 
session_start();

session_destroy();

echo "<script>alert ('You have logout from your account!!!'); document.location.href = '../index.php'</script>";
?>