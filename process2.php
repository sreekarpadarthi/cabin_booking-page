<?php

$db=mysqli_connect('localhost','sreekar','sreekar','login');
$uname=$_POST['username'];
$pass=md5($_POST['password_1']);

if (isset($_POST['login'])) {
  

if(empty($uname) || empty($pass))
{
        header("Location:login.php?id=Some fields are empty");
        exit();
    }

$qry=mysqli_query($db, "SELECT * FROM user WHERE username='$uname'");
if($qry==false)
{
die("Query Failed: ");
}
else
{
   $row=mysqli_fetch_assoc($qry);
if($uname==$row['username'])
{
    if($uname==$row['username'] && $pass==$row['password'])
    {
            header("Location: booking.php");
            exit();    
    }
    else
    {
                header("Location:login.php?id= your password is incorrect. Please try again");
        }
    }
    
  }
}
  ?>