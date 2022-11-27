<?php
session_start();
require 'connector.php';

$email = $_POST['email'];
$password = $_POST['password'];
$login = mysqli_query($connection, "select email, password from users where email='$email' and password='$password'");
$valid = mysqli_num_rows($login);

if($valid > 0){
    $_SESSION['email'] = $email;
    $time=time();
    if(!empty($_POST['remember'])){
        $checkbox = $_POST['remember'];
        setcookie("email_cookies", $email, $time + 1800, '/');
        setcookie("password_cookies", $password, $time + 1800, '/');
        setcookie("checkbox_cookies", $checkbox, $time + 1800, '/');
    }
    echo "<script>alert ('Login successful'); document.location.href = '../pages/Home-Rio.php'</script>";
}else{
    echo "<script>alert ('Please enter the correct account'); document.location.href = '../pages/Login-Rio.php'</script>";
}
