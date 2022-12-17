<?php
$server = "localhost";
$username = "root"; 
$password = "";
$dbname = "mysql";

 $conn = mysqli_connect($server, $username, $password, $dbname);

if(!$conn){
  die("failed to connect to the database" . mysqli_connect_error());

}else{
    return $conn;
}


?>