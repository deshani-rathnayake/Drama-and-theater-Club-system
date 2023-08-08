
<!DOCTYPE html>
 <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/main.css">
        <link rel="stylesheet" href="CSS/nav.css">  
    </head>
    <body>

    <nav class="nav">
    <ul>
    <a href="Index.html">HOME</a>
    <a href="AboutUs.html">ABOUT US</a>
    <a href="Membership.html">MEMBERSHIP</a>
    <a href="login.html">LOGIN</a>
    <a href="event.php">EVENTS</a>
    <a href="booking.html">EVENTS BOOKING</a>
    <a href="newspage.php">NEWS</a>
    <a href="PHP/logout.php">LOG OUT</a>
    <a href="login.html">ADMIN</a>
    </ul>
  </nav>

        <!-- header -->
        <header>
            <div class = "navigation-container">
                <div class = "top-head">
                    <div class = "web-name">
                        <h4>Drama & Theater Club</h4>
                    </div>

                    <div class = "ham-btn">
                        <span>
                            <i class = "fas fa-bars"></i>
                        </span>
                    </div>

                    <div class = "times-btn">
                        <span>
                            <i class = "fas fa-times"></i>
                        </span>
                    </div>
                </div>

                <!-- nav bar -->

  

                <!--social icons -->
                <div class = "social-icons">
                    <ul>
                        <li>
                            <a href= "#"><i class = "fab fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href= "#"><i class = "fab fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href= "#"><i class = "fab fa-instagram"></i></a>
                        </li>
                        <li>
                            <a href= "#"><i class = "fab fa-youtube"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        
        <hr>

        <main>
            <section class = "main-container-left">
                <h2>Headline of the day</h2>
                
                <div class = "container-top-left">
                <?php 
require 'PHP/Connect.php';
$query2="SELECT Topic,Description,Image FROM news WHERE Type='Heading' ORDER BY Time;" ;
$result2=mysqli_query($con,$query2);
while ($data2=mysqli_fetch_array($result2)) {
?>
    <article>
                    <!--<h4>just in </h4>-->
                    <div>
                        <h2><?php echo $data2['Topic']?></h2> <br> 
                        <!-- School sparks outrage after offering cooking and drama only to girls -->
                        <p><?php echo $data2['Description'] ?></p> <br>
                        <!-- A primary school has sparked outrage after deciding that girls would be offered a 
						drama class while boys would take a design class.
                        -->
                    </div>
                    <img src = "images/<?php echo $data2['Image']?>.jpg">
                </article>
                <?php
}
   ?>  

                <div class = "container-bottom-left">
                <?php 
require 'PHP/Connect.php';
$query3="SELECT Topic,Description,Image FROM news WHERE Type='Main' ORDER BY Time;" ;
$result3=mysqli_query($con,$query3);
while ($data3=mysqli_fetch_array($result3)) {
?>
    <article>
                   
                    <div>
                        <h2><?php echo $data3['Topic']?></h2> <br>
                        <!-- School sparks outrage after offering cooking and drama only to girls -->
                        <p><?php echo $data3['Description'] ?></p> <br>
                        <!-- A primary school has sparked outrage after deciding that girls would be offered a 
						drama class while boys would take a design class.
                        -->
                    </div>
                    <img src = "images/<?php echo $data3['Image']?>.jpg">
                </article>
                <?php
}
   ?>  
                </div>

            </section>

            <section class = "main-container-right">
                <h2>Latest News</h2>

                <?php 
require 'PHP/Connect.php';
$query="SELECT Topic,Description,Image FROM news WHERE Type='Normal' ORDER BY Time;" ;
$result=mysqli_query($con,$query);
while ($data=mysqli_fetch_array($result)) {
?>
    <article>
                    <h4>just in </h4>
                    <div>
                        <h2><?php echo $data['Topic']?></h2>
                        <!-- School sparks outrage after offering cooking and drama only to girls -->
                        <p><?php echo $data['Description'] ?></p>
                        <!-- A primary school has sparked outrage after deciding that girls would be offered a 
						drama class while boys would take a design class.
                        -->
                    </div>
                    <img src = "images/<?php echo $data['Image']?>.jpg">
                </article>
                <?php
}
   ?>  
           
<!--
                <article>
                    <h4>just in </h4>
                    <div>
                        <h2>Mark Medoff: Tony-winning playwright of ‘Children of a Lesser God’</h2>

                        <p>The provocative playwright, whose screen adaptation of his play about 
						, penned more than two dozen plays</p>

                        
                    </div>
                    <img src = "images/Ridley.jpg">
                </article>

                <article>
                    <h4>just in </h4>
                    <div>
                        <h2>The Old Vic at 200: Celebrating the theatre's golden legacy</h2>

                        <p>These were reasonably affluent theatregoers hoping to get tickets the next morning to see Laurence Olivier in Othello.</p>

                        
                    </div>
                    <img src = "images/play1.jpg">
                </article>

                <article>
                    <h4>just in </h4>
                    <div>
                        <h2>ITV in gloomy drama, more good content could cheer it up</h2>

                        <p>As the Old Vic celebrates its bicentenary with an open house, street party and variety night on Saturday 12 May, it can look back with enormous pride on those golden years.</p>

                        
                    </div>
                    <img src = "images/play3.jpg">
                </article>

-->


				
				<br>
				<br>
				<br>
            </section>
        </main>

        
    </body>
</html>