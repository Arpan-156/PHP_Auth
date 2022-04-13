<?php
include "db.php";

if($_POST){
    $email = $_POST["email"];
    $password = $_POST["psd"];


    $sql = "SELECT * FROM data WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
	$row = $result->fetch_assoc();

    if($row!=null){
        session_start();
        $_SESSION["loggedin"] = true;
        $_SESSION["email"] = $email;
        header("location: details.php");
    }else{
            echo "Error submitting the form!";
        }
    }


?>