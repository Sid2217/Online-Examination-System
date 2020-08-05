<?php
$servername = "localhost";
$username = "root";
$password = "";

getConnection();
function getConnection()
{
try {
    	$conn = new PDO("mysql:host=localhost;dbname=project",'root','');
    
   		 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	 $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    		
    return $conn;
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
}


function closeConnection(){
	$conn=null;
}
?>