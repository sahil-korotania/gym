<?php       
    $id = $_REQUEST['id'];
       
    include "config.php";
        
    $query = "delete from `gym` where id='$id'";

    $result = mysqli_query($con,$query);

    if ($result > 0) {
        echo "<script>window.location.assign('gym_table.php?msg=Data Deleted Successfully')</script>";
    } else {
        echo "<script>window.location.assign('gym_table.php?msg= Error!!!!! Try again')</script>";
    }
?>