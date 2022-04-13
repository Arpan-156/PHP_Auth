<?php
include "db.php";

if($_POST){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $dob = $_POST["dob"];
        $address = $_POST["add"];
        $phno = $_POST["phno"];
        $email = $_POST["email"];
        $psw = $_POST["password"];

        $sql = "INSERT INTO data(firstname, lastname, dob, address, phno, email, password)
         values('$fname', '$lname', '$dob', '$address', '$phno', '$email', '$psw')";

        if($conn->query($sql)){
            header("Location: index.html");
        }else{
            echo "Error submitting the form!". $conn->error;
        }
    }
?>