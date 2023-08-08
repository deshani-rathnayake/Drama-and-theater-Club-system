<?php
require 'Connect.php';

$type=$_POST['type'];
$topic=$_POST['topic'];
$description=$_POST['description'];
$time=$_POST['time'];
$image=$_POST['image'];

$query="INSERT INTO news(Type,Topic,Description,Time,Image) values ('$type','$topic','$description','$time','$image');";

if(mysqli_query($con,$query)){
    echo "Data Inserted";
    header("Location: ../Admin/dashboardNewsForm.html");
}else{
    echo "Error".mysqli_error($con);
}
?>