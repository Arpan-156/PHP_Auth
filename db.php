<?php
$srvname = "localhost";
$usrname = "root";
$password = "";
$dbname = "logreg";

$conn = new mysqli($srvname, $usrname, $password, $dbname);

if($conn->connect_error){
    die("Connection failed : " . $conn->connect_error);
}