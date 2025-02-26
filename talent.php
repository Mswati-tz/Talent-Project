<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<script src="js/script.js"></script>
</head>

	<style>
		body{
			margin: auto;
			box-sizing: border-box;
			padding: 0;
			font-family: 'Poppins', sans-serif;
		}
		 .content{
          background-image: url('pictures/cm.jpg');
          width: 100%;
          height: 350px;
          background-size: cover;
          background-position: relative;
          position: relative;
          margin-top: -22px;
     }
     .content1{
     	transform: translate(0%,250%);
     	color: #fff;
     }
</style>

<body>
 <div class="header">
      	
      		<div class="logo-container">
      			<h1 style="color:blue">GO<span>TALENT</span></h1>
      		</div>

            <div class=inner-header>
      		<ul>
      			<li><a href="home.php">HOME</a></li>
      			<li><a href="announcement.php">ANNOUNCEMENT</a></li>
      			<li><a href="">TALLENT</a></li>
      			<li><a href="contuct.php">CONTACT US</a></li>
      			<li><a href='logout.php'>LOGOUT</a></li>
      			
      		</ul>
      	    </div>
            </div>

     <div class="content">
          <h1 class="content1"><center>TALENT MANAGEMENT SYSTEM</center></h1>
    </div>
    </div>

<style>
	.talent-container{
		width:70%;
		margin:auto;
	}
	.box-container{
		display:flex;
		justify-content: space-around;
		background: black;
		height: 60px;
		color: #fff;
		margin-bottom: 30%;
	}
	.box{
		height: 50px;
		padding: 5px 5px 5px 5px;
		cursor: pointer;
	}
	.div{
		visibility: hidden;
	}
    .div img{
		border-radius:180%;
	}
	span{
		color: green;
	}
	.box:hover .div{
	    visibility: visible;
		height: 200px;
		border-radius: 5px;
		padding: 10px 10px 10px 10px;
		background:  rgb(12, 11, 11)
	}
</style> 


<div class="talent-container">
<h1 style="background: black; color: #fff;"><center>TALENTS</center></h1>
	<div class="manager">
		<img src="pictures/meet (1).jpg" alt="" width="100%" height="500px">
		<div class="box-container">
		<div class="box">
			<span></span>
			<h3>story</h3>
			<div class="div">
			<center><img src="pictures/admin.png" alt="" width="50px"; height="50px";></center>
			<p style="text-align: center";>Augustino L. Fuluge<br><span>Web Dev & Designer</span><br>About all over my project i used to share and corporate experience and all my fellow student<br><span style="color: red">augustinofuluge@gmail.com</span></p>
            </div>
		</div>
		<div class="box" style="background:  rgb(12, 11, 11)">
		    <span></span>
			<h3>Global-event</h3>
			<div class="div">
			<img src="pictures/gir.jpg" alt="" width="50px"; height="50px";>
			<p style="text-align: center";>We will be dedicate event that will allow us to join and communicate with other Country, Region or Nations<br><a href="global-event.php">view</a></p>
            </div>
		</div>
		<div class="box">
		    <span></span>
			<h3>Consultation</h3>
			<div class="div">
			<img src="pictures/gir.jpg" alt="" width="50px"; height="50px";>
			<p style="text-align: center";>Here Is Mswati<br><span>Web Designer</span><br>Whener you fell down never give up coding needs more practices and commitment</p>
            </div>
		</div>
		<div class="box" style="background:  rgb(12, 11, 11)">
		    <span></span>
			<h3>Finance</h3>
			<div class="div">
			<img src="pictures/gir.jpg" alt="" width="50px"; height="50px";>
			<p style="text-align: center";>Financial issues available for the Team, Group for Reasonable, Calculated, Planned, And Assured project</p>
            </div>
		</div>
		</div>
	</div>
</div>



<footer>
	<div class="footer">
		<div class="footer1">
			<h3>Contact-us</h3>
			<p>Tell:+255 628 651 430</p>
			<p>Email:augustinofuluge@gmail.com</p>
			<p>Address:Box 994 Mbeya</p>
		</div>
		<div class="footer2">
			<h3>Follow-us</h3>
			<p>WhatsApp:+255 628 651 430</p>
			<p>Email:augustinofuluge@gmail.com</p>
			<p>Facebook:Augustino Fuluge</p>
			<p>Instergram:Senior-agxt</p>
			<p>Twitter:Mswati</p>
		</div>
		<div class="footer3">
			<h3>Opinions & sugestions</h3>
			<form method="POST">
			<p>Tell:+255 628 651 430</p>
			<p><input type="email" name="user-email" placeholder="Enter your email" required></p>
			<p><textarea name="user-text" placeholder="sugestions....." required></textarea></p>
			<p><input type="submit" name="sugestion" value="send"></p>
		    </form>
		</div>
	</div>
</footer>

</body>
</html>

