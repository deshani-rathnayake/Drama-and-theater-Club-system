<?php
$host="localhost";
$user="root";
$pass="";
$db="dramaclub";
$con=mysqli_connect($host,$user,$pass,$db);
if(isset($con))
{
    // echo "Connected";
}
else{
    echo mysqli_error($con);
}
?>