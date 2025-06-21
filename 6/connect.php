<?php
$con=new mysqli('localhost','root','','wt');
if(!$con){
    die(mysqli_error($con));
}
else{
    echo "Connection successful!!";
}
?>
