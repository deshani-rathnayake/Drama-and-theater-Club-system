<?php
require 'Connect.php';
$username=$_POST['username'];
$password=$_POST['password'];
$name=$_POST['name'];
$email=$_POST['email'];
$phoneNo=$_POST['number'];
$confirmPassword=$_POST['passwordConfirm'];
$gender=$_POST['gender'];
$query="INSERT INTO member(Name,UserName,Email,Phone,Password,Gender) values ('$name','$username','$email','$phoneNo','$password','$gender');";
if($password==$confirmPassword){
if(mysqli_query($con,$query)){
    echo "Data Inserted";
    header("Location: ../Index.html");
}else{
    echo "Error".mysqli_error($con);
}
}
?>