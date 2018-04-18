<?php
$db=mysqli_connect('localhost','sreekar','sreekar','login');
print_r($db);

$sql="DELETE * FROM booking where `status` = 1";
mysql_query($db,$sql);
 
 ?>