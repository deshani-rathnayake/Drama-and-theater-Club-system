<?php
require 'Connect.php';
$name=$_POST['name'];
$email=$_POST['email'];
$phoneNumber=$_POST['phonenumber'];
$event=$_POST['event'];
$date=$_POST['date'];
$time=$_POST['time'];
$numoftick=$_POST['numoftick'];



$query="INSERT INTO eventsbooking(name,email,phonenumber,event,date,time,numoftick) values ('$name','$email','$phoneNumber','$event','$date','$time','$numoftick');";
if(mysqli_query($con,$query)){
    echo "Data Inserted";
    header("Location: ../EventBookingSuccessful.html");
    //header("Location: ../Index.html");

    
}else{
    echo "Error".mysqli_error($con);
}
?>