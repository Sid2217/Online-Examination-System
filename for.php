<?php
session_start();


require ('helper.php');
require ('connection.php');
//echo "string";
$user=$_POST['user'];



$conn=getConnection();

$stmt = $conn->prepare("SELECT * from student where s_id='$user'");
  $stmt->execute();
if ($stmt->rowCount()==0) {


  $_SESSION['message']="Invalid user name";
  redirectTo('forgetpass.php');
}
else {
redirectTo('show.php');
unset($_SESSION['message']);
$_SESSION['user']=$user;
}

 ?>
