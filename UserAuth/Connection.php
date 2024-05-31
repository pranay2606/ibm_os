<?php
$host = "localhost";
$username = "root";
$password= "";
$database = "ibm";
$port=3306;

$conn = new mysqli($host,$username,$password,$database);

if($conn->connect_error){
    die("Connection Failed");
}

?>