<?php 

include "config.php"; 

if (isset($_GET['id'])) {

    $admin_id = $_GET['id'];

    $sql = "DELETE FROM `admin` WHERE `id`='$admin_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>