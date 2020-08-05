<?php


$id=$_GET['id'];
require('connection.php');
require('helper.php');

$conn=getConnection();

$sql = "DELETE FROM student WHERE s_id='$id'";
$sql2 ="DELETE FROM result WHERE s_id='$id'";

$conn->query($sql);
$conn->query($sql2);
redirectTo('student1.php');




 ?>
