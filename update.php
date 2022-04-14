<?php session_start();
if($_SESSION["email"]){
    $email = $_SESSION["email"];
    include "db.php";
    $sql = "SELECT * FROM data WHERE email='$email'";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  if ($row) {
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Form</title>
    <link rel="icon" type="image/x-icon" href="img/icons8-form-48.png">
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="" method="post" class="sign-up-form">
            <h2 class="title">UPDATE</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="fname" value="<?php echo $row["firstname"] ?>" placeholder="Firstname" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="lname" value="<?php echo $row["lastname"] ?>" placeholder="Lastname" />
            </div>
            <div class="input-field">
              <i class="fas fa-candy-cane"></i>
              <input type="date" name="dob" value="<?php echo $row["dob"] ?>" placeholder="DOB" />
            </div>
            <div class="input-field">
              <i class="fas fa-location-arrow"></i>
              <input type="text" name="add" value="<?php echo $row["address"] ?>" placeholder="Address" />
            </div>
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="text" name="phno" value="<?php echo $row["phno"] ?>" placeholder="Phone Number" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" value="<?php echo $row["email"] ?>" placeholder="Email" />
            </div>
            <input type="submit" class="btn" value="Update" >
            
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Want to Update Your Account Details</h3>
            <p>
              Click UPDATE
            </p>
            <button class="btn transparent" id="sign-up-btn">
              update
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Want to go back to previous page</h3>
            <p>
              Click Back
            </p>
            <button class="btn transparent" id="sign-in-btn">
              BACK
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="script.js"></script>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </body>
  <?php
  if($_POST){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $dob = $_POST["dob"];
    $address = $_POST["add"];
    $phno = $_POST["phno"];
    $email = $_POST["email"];

    $sql = "UPDATE data SET firstname='$fname', lastname='$lname', dob='$dob', address='$address', phno='$phno', email='$email' WHERE email='$email'";

    if ($conn->query($sql)) {
        echo "<script>window.location='details.php'</script>";
        echo "Data Updated !";
      } else {
        echo "Error submitting the form!";
        echo $conn->error;
      }

  }
  ?>
</html>
<?php
}else{
    header("Location: index.html");
}
?>