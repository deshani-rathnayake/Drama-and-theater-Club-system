<?php
session_start();
require 'PHP/Connect.php';
if (!isset($_SESSION['username'])) {
   header("Location: Index.html");
   exit();
}
$query="SELECT * FROM events ORDER BY Date ASC";
$query2="SELECT * FROM events ORDER BY Date DESC";
$result=mysqli_query($con,$query);
$result2=mysqli_query($con,$query2);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	
	<title>Event page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/event.css">
  <link rel="stylesheet" href="CSS/nav.css">
  
  </head> 
<body>

<nav class="nav">
    <ul>
    <a href="Index.html">HOME</a>
    <a href="AboutUs.html">ABOUT US</a>
    <a href="gallery.html">GALLERY</a>
    <a href="Membership.html">MEMBERSHIP</a>
    <a href="login.html">LOGIN</a>
    <a href="event.php">EVENTS</a>
    <a href="booking.html">EVENTS BOOKING</a>
    <a href="newspage.php">NEWS</a>
    <a href="PHP/logout.php">LOG OUT</a>
    <a href="login.html">ADMIN</a>
    </ul>
  </nav>

  <div class="main">
  <h2>EVENTS</h2>
<h3>Upcoming Events</h3><hr>

<?php
while ($data=mysqli_fetch_array($result)) {
   $currentDate= date_create(date("Y-m-d"));
   $eventDate=date_create($data['Date']);
   $temp =date_diff($currentDate,$eventDate);
   $differenceDate= intval($temp->format("%d"));
   $differenceMonth= intval($temp->format("%m"));
   $differenceYear= intval($temp->format("%y"));
   if ($differenceDate<=30 && $differenceMonth==0 && $differenceYear==0) {
      # code...
   
?>
 <!--cards -->

<div class="card">

   <div class="image">
      <img src="images\<?php echo $data['Image']?>.jpg">
   </div>

   <div class="title">
      <h1><?php echo $data['Topic']?></h1>
   </div>

   <div class="des">
      <p><?php echo $data['Date']?><br> 
         <?php echo $data['Time']?><br>
         <?php echo $data['Place']?><br>
         <?php echo 'Rs. '?><?php echo $data['Ticket']?>
   </div>

</div>
<?php
   }
}
?>



<h3>Latest Events</h3><hr>
<?php
while ($data2=mysqli_fetch_array($result2)) {
   $currentDate= date_create(date("Y-m-d"));
   $eventDate=date_create($data2['Date']);
   $temp =date_diff($currentDate,$eventDate);
   $differenceDate= intval($temp->format("%d"));
   $differenceMonth= intval($temp->format("%m"));
   $differenceYear= intval($temp->format("%y"));
   if ($differenceMonth>0 || $differenceYear>0) {
      # code...
   
?>
 <!--cards -->

<div class="card">

   <div class="image">
      <img src="images\<?php echo $data2['Image']?>.jpg">
   </div>

   

   <div class="title">
      <h1><?php echo $data2['Topic']?></h1>
   </div>

   <!--
   <div class="des">
      <p><?php echo $data2['Date']?><BR> <?php echo $data2['Time']?><br>
   </div>
   -->

</div>
<!--cards -->
<?php
   }
}
?>


</div>
</div>
</div>
</body>
</html>