<?php

session_start();

require ('helper.php');
require ('connection.php');
	//echo"sdaf";

	$user=$_POST['user'];
	$password=$_POST['password'];
 	$message="";
	//echo $user;
	//$sql="select * from admin where Id=$user";

	$conn=getConnection();

	$stmt = $conn->prepare("SELECT * from admin where id='$user' && password='$password' ");
    $stmt->execute();

	if ($stmt->rowCount()==0) {

		echo "failed";
		$_SESSION['message']="Invalid user or password";
		redirectTo('admin.php');
}
else {
	login($user);
	//echo "sucess	";
	redirectTo('aindex.php?q=1');
}
 ?>
