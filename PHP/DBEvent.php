<?php
require 'Connect.php';
$topic=$_POST['topic'];
$date=$_POST['date'];
$time=$_POST['time'];
$image=$_POST['image'];

$query="INSERT INTO events(Topic,Date,Time,Image) values ('$topic','$date','$time','$image');";

if(mysqli_query($con,$query)){
    echo "Data Inserted";
    header("Location: ../Admin/dashboarddEventForm.html");
}else{
    echo "Error".mysqli_error($con);
}
?>
