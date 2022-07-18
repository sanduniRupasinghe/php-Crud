<?php 

include "config.php";

    if (isset($_POST['update'])) {

        $firstname = $_POST['firstname'];
        $admin_id = $_POST['admin_id'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $gender = $_POST['gender']; 

        $sql = "UPDATE `admin` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`password`='$password',`gender`='$gender' WHERE `id`='$admin_id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['id'])) {

    $admin_id = $_GET['id']; 

    $sql = "SELECT * FROM `admin` WHERE `id`='$admin_id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $first_name = $row['firstname'];
            $lastname = $row['lastname'];
            $email = $row['email'];
            $password  = $row['password'];
            $gender = $row['gender'];
            $id = $row['id'];

        } 

    ?>


<!DOCTYPE html>

<html>

<head>
    <title>Update User Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="nav.css">
</head>

<body>

 <!-- nav bar-->
 <div class="navbar">
            <a href="create.php">User Registration</a>
            <a href="view.php">User View</a>

        </div>
<br>
<br>

<center><h2>User Update Form</h2></center>

<form action="" method="POST">

          <fieldset>

            <legend>Personal information:</legend>

            <div class="input-group">
                <label> First name</label>
                <input type="text" name="firstname" value="<?php echo $first_name; ?>">
                <input type="hidden" name="admin_id" value="<?php echo $id; ?>">
            </div>


            <div class="input-group">
                <label> Last name</label>
                <input type="text" name="lastname" value="<?php echo $lastname; ?>">
            </div>


            <div class="input-group">
                <label> Email</label>
                <input type="email" name="email" value="<?php echo $email; ?>">
            <div>

            
            <div class="input-group">
                <label> Password</label>
                <input type="password" name="password" value="<?php echo $password; ?>">
            </div>


            <div class="input-group">
                <label> Gender</label>
                <input type="radio" name="gender" value="Male" <?php if($gender == 'Male'){ echo "checked";} ?> >Male
                <input type="radio" name="gender" value="Female" <?php if($gender == 'Female'){ echo "checked";} ?>>Female
            </div>
  
                 <input type="submit" value="UPDATE" name="update" class="btn">
            

          </fieldset>

        </form>
    
    <?php

    } else{ 

        header('Location: view.php');

    } 

}

?>

</body>

</html>