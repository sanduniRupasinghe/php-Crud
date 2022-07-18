<?php 

include "config.php";

  if (isset($_POST['submit'])) {

    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO `admin`(`firstname`, `lastname`, `email`, `password`, `gender`) VALUES ('$first_name','$last_name','$email','$password','$gender')";

    $result = $conn->query($sql);

    if ($result == TRUE) {

      echo "New record created successfully.";

    }else{

      echo "Error:". $sql . "<br>". $conn->error;

    } 

    $conn->close(); 

  }

?>


<!DOCTYPE html>

<html>
    <head>
        <title>User Registration</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="nav.css">
    </head>

<body>

 <!-- nav bar-->
 <div class="navbar">
            <a href="create.php">User Registration</a>
            <a href="view.php">User View</a>

        </div>

<center><h2>Signup Form</h2></center>

<form action="" method="POST">

  <fieldset>

    <legend><b>Personal information:</b></legend>

    <div class="input-group">
        <label> First name</label>
        <input type="text" name="firstname">
    </div>

    
    <div class="input-group">
        <label> Last name</label>
        <input type="text" name="lastname">
    </div>


    <div class="input-group">
        <label> Email</label>
        <input type="email" name="email">
    </div>


    <div class="input-group">
        <label> Password</label>
        <input type="password" name="password">
    </div>


    <div class="input-group">
        <label> Gender</label>
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
    </div>

    <center><input type="submit" name="submit" value="SAVE" class="btn"></center>
    

  </fieldset>

</form>

</body>

</html>
