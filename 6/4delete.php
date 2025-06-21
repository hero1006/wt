<?php
include 'connect.php';
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql="DELETE FROM crud WHERE id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        // echo "delete successfull!";
        header('location:read.php');
    }
    else{
        die(mysqli_error($con));
    }
}
?>
