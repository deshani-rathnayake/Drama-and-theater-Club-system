<?php
session_start();
require 'Connect.php';
$username=$_POST['username'];
$password=$_POST['password'];
$query="SELECT * FROM member WHERE UserName='$username' and Password='$password';";
if(mysqli_query($con,$query)){
    $_SESSION['username']=$username;
    if ($username=='Admin'&&$password=='12345') {
        header("Location: ../Admin/dashboardEvent.html");
    }
    else
    header("Location: ../Index.html");
}else{
    echo "Error".mysqli_error($con);
}
?>