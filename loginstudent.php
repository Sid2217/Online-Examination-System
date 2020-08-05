<?php
session_start();


require('helper.php');
require('connection.php');
//echo "string";
$user=$_POST['user'];
$password=$_POST['password'];


$conn=getConnection();

$stmt = $conn->prepare("SELECT * from student where s_id='$user' && password='$password' ");
  $stmt->execute();
if ($stmt->rowCount()==0) {

  $_SESSION['message']="Invalid user or password";
  redirectTo('index.php');
}
else {
login($user);
redirectTo('subject.php');
}

 ?>
