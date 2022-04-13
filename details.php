<?php

session_start();
if ($_SESSION["loggedin"]) {
    include "db.php";
$email = $_SESSION["email"];

$sql = "SELECT * FROM data WHERE email='$email'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hello</title>
</head>
<body>
    <a href="logout.php">LOGOuT</a>
</body>
</html>








<?php
}else{
    header("Location: index.html");
}
?>