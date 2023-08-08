<?php

include_once("Connect.php");
$query="select * from eventsbooking";
$result=mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
	
    <link rel="stylesheet" href="../CSS/dashboard.css">
    <link rel="stylesheet" href="../CSS/userInbox.css">
<style>
 .cls1{
  position:relative;
  left:120px;
  bottom:650px;
 }

 
  </style>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   
<body bg color="green">
  <div class="sidebar">
  
    <div class="logo-details">
      <span class="logo_name">DRAMA & THEATER CLUB UOV</span>
    </div>
	
      <ul class="nav-links">
        <li>
          <a href="dashboardEvent.html">

            <i></i>
            <span class="links_name">EVENTS</span>
          </a>
        </li>
		
		<li>
			<a href="dashboardNews.html" >
			 <i></i>
            <span class="links_name">NEWS</span>
          </a>
        </li>
		
		<li>
			<a href="dashboardReservetion.php" class="active">
			 <i></i>
            <span class="links_name">RESERVETION</span>
          </a>
        </li>
		

		
		<li>
			<a href="../PHP/logout.php">
			 <i></i>
            <span class="links_name">LOG OUT</span>
          </a>
        </li>
		
      </ul>
  </div>
  
  <!-- .....................................................................................................-->
  
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i></i>
        <span class="dashboard">Dashboard</span>
      </div>



      <div class="profile-details">

        <span class="admin_name">Admin Drama & Theater Club</span>
        <i class='bx bx-chevron-down' ></i>
      </div>
    </nav>
	
  </section>
  <div class="cls1">
  <center><table class="styled-table" class="center">
    <tr>
        <th>Request Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone Number</th>
        <th>Event</th>
        <th>Date</th>
        <th>Time</th>
        <th>Number of Tickets</th>
    </tr>


    


<?php
while($data=mysqli_fetch_array($result))
{
    ?>
    
    <tr>
    
    <td><?php echo $data['id']?></td>
    <td><?php echo $data['name']?></td>
    <td><?php echo $data['email']?></td>
    <td><?php echo $data['phonenumber']?></td>
    <td><?php echo $data['event']?></td>
    <td><?php echo $data['date']?></td>
    <td><?php echo $data['time']?></td>
    <td><?php echo $data['numoftick']?></td>
    </tr>
</div>
    <?php
}

?>
</table>

</center>
</div>

</body>
</html>

