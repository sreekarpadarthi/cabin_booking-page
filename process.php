<?php
session_start();

$username="";
$email="";
$errors=array();


 $db=mysqli_connect('localhost','sreekar','sreekar','login');
print_r($db);
 if (isset($_POST['signup'])) {
  $username=($_POST['username']);
  $email=($_POST['email']);
  $password_1=($_POST['password_1']); 
  $password_2=($_POST['password_2']);

    if (count($errors) > 0) {
      //to do errors
      if ($password_1!=$password_2) {
        # code...
        header("location: login.php?id= passwords didnot match");
        exit();
      }
      
    } else {
      $password=md5($password_1);
      $sql="INSERT INTO `user`(`username`,`email`,`password`) VALUES ('$username','$email','$password')";
                 echo $sql;
        mysqli_query($db, $sql);
       $_SESSION['username']=$username;
       header('location: login.php');
    }
  
 }
 ?>