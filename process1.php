<?php
$db=mysqli_connect('localhost','sreekar','sreekar','login');
// print_r($db);
 if (isset($_POST['save'])) {
  $cabin=$_POST['cabin'];
  $time=$_POST['time'];
  $qry=mysqli_query($db,"SELECT * FROM booking WHERE cabin = '$cabin'");
   $row=mysqli_fetch_assoc($qry);
       if ($row['status'] == '1') {
     header("location: display1.php");
      
      exit();
    } else {
       $sql="INSERT INTO `booking`(cabin,time,status) VALUES ('$cabin','$time','1')";
       
        mysqli_query($db,$sql);
       	
       header("location: display.php");
       exit();

    }
  
 }
 ?>