<?php
$hostname = "localhost"; 
$username = "root";      
$password = "";
$dbName = "kampus_merdeka"; 
$conn = new mysqli($hostname,$username,$password,$dbName); //Session connection

if($conn->connect_errno){
    die("connected failed: " . $conn->connect_errno);
} else{
    // echo"connection successful";
}

?>