

<?php

require('helper.php');
require('connection.php');
$user=$_POST['user'];
$name=$_POST['first'];
$sem=$_POST['semister'];
$password=$_POST['password'];
$last=$_POST['last'];
$sq=$_POST['sq'];
$sa=$_POST['sa'];

$conn=getConnection();
    try {
        $stmt = $conn->prepare("SELECT * from student where s_id='$user' ");
        $stmt->execute();
        if ($stmt->rowCount()>0) {
          $_SESSION['e1']="already exists";
          echo "Taken";
          redirectTo('create.php');
        }
        else {
          unset($_SESSION['e1']);
        $sql = "INSERT INTO Student (s_id, s_name, l_name,password,Semister,sq,sa)
        VALUES ('$user','$name','$last','$password','$sem','$sq','$sa')";
        $conn->exec($sql);
        echo "New record created successfully";
        redirectTo('index.php');
      }
    }
    catch(PDOException $e)
      {
        echo $sql . "<br>" . $e->getMessage();
      }




 ?>
