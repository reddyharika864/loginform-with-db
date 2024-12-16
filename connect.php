<?php
include 'database.php';

if(isset($_POST['submit']))
{
    $name = $_POST['username'];
    //$email = $_POST['wynkemail'];
    $psw = $_POST['password'];
    //$confirm_password = $_POST['confirm_password'];
    $insert_query = "INSERT INTO userinfo (username, password) VALUES ('$name','$psw')";  //tablename
    if(mysqli_query($con, $insert_query)) {
        echo "<script>alert('User registered successfully')</script>";
        header("location:sample.html"); // Redirect to login page
        exit;
    } else {
        echo "Error: " . mysqli_error($con);
    }
}
?>