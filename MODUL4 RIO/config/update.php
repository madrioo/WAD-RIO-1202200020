<?php 
session_start();

require 'connector.php';
 
if(isset($_POST['btn-update'])){
    $id=$_POST['id'];
    $nama = $_POST['nama'];
    $email = $_GET['email'];
    $password = $_POST['password'];
    $confirm = $_POST['konfirmasiPassword'];
    $no_hp = $_POST['no_hp'];
    

    if($password != $confirm){
	    echo "<script>alert ('Wrong password'); document.location.href = '../pages/Profile-Rio.php'</script>";
    }

    $updateUsers=mysqli_query($connection,"update users set nama='$nama', email='$email', password='$password', no_hp='$no_hp' where id='$id'");
    
    if($updateUsers){
        $_SESSION['edit'] = 'Edit successful';
        header("location:../pages/Profile-Rio.php");
    } else{
    echo 'Failed to edit';
    }
}
?>