<?php 

include "config.php";

$sql = "SELECT * FROM admin";

$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>
    <title>View Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
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


    <div class="container">
    <div className="col-lg-8 mt-2 mb-2">

    <a class="btn btn-warning" href="create.php">Create New User</a>
<br>
<br>
      <b><h3><p>All Users List</p></h3></b>
     
  </div>
<br>

<table class="table">

    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email</th>
        <th scope="col">Gender</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>
                    <tr>

                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['firstname']; ?></td>
                    <td><?php echo $row['lastname']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><a class="btn btn-success" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>