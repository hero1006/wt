<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="SELECT * FROM crud where id=$id";
$result=mysqli_query($con,$sql); 
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql="UPDATE crud set id=$id,name='$name',email='$email', mobile='$mobile', password='$password' where id=$id"; 
    $result=mysqli_query($con,$sql);
    if($result){
       echo "Update Data successfull";
        header('location:read.php');
    }
    else{
        die(mysqli_error($con)); } }
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>crud operation</title>
</head>
<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" placeholder="Enter full name" autocomplete="off" 
                value=<?php echo $name;?>>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter the email" autocomplete="off"
                value=<?php echo $email; ?>>
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" name="mobile" placeholder="Enter the mobile number" autocomplete="off"
                value=<?php echo $mobile;?>> </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Enter the password" autocomplete="off"
                value=<?php echo $password ?>>  </div>
            <button type="submit" name="submit" class="btn btn-primary">Update</button></form> </div></html>
