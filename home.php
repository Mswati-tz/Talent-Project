<?php
session_start();
?>

<?php


if(!isset($_SESSION['regno'])){
	header('location:login.php');
}

$regno=$_SESSION['regno'];

$conn=mysqli_connect('localhost','root','','talentdb');

$fetch="SELECT * FROM users WHERE regno='regno'";
$execute=mysqli_query($conn,$fetch);

while($row=mysqli_fetch_array($execute)){

}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
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
	 span{
		color: rgb(96, 13, 74);
	 }
</style>

<body>
 <div class="header">
      	
      		<div class="logo-container">
      			<h1 style="color:blue">GO<span>TALENT</span></h1>
      		</div>

            <div class=inner-header>
      		<ul>
      			<li><a href="">HOME</a></li>
      			<li><a href="announcement.php">ANNOUNCEMENT</a></li>
      			<li><a href="talent.php">TALLENT</a></li>
      			<li><a href="contuct.php">CONTACT US</a></li>
      			<li><a href='index.php'>LOGOUT</a></li>
      			
      		</ul>
      	    </div>
            </div>

     <div class="content">
          <h1 class="content1"><center>TALENT MANAGEMENT SYSTEM</center></h1>
    </div>
    </div>

    <div class="main" style="margin: auto; width:80%;">

    	<h1 style="background-color: black; color: white; padding: 10px;">HOME</h1>
    	<P>Talent managemeny system</P>
    	<p>About talent management system is the aimed to organize and collect together individual talents from different student and build a profitable unit among them, But also the system aimed to value different talent by providing support example advanced tools and techology for student to perform better</p>
    </div>

    <div class="detail">
    	<div class="detail-container">
    	 <div class="image">
    		<img src="pictures/gir.jpg" width="350px" height="350px">
    	 </div>
    	 <div class="image-detail" style="text-align: center; margin-top: 3rem; word-spacing: 3px;">
    		<h2>hire about one of the student</h2>
    		<p>Am so exited and also interested enroled in talent management system as long as it has contribute for half percent in rising and manage my talent in a good managable maner,<br>Thus i would like to advice my fellow student to register and gain more features about different talent</p>
    	 </div>
        </div>
    </div>

<div class="views">
	<div class="view-detail">
	<div class="mission">
		<h2>Our mission</h2>
		<p>Our mission is to go after advance student talent in different categories because we believe that a talent is a gifted employment apart from being employed by the agencies or government</p>
	</div>
	<div class="vission">
		<h2>Our vission</h2>
		<p>Our vission it to take the next step higher after four to five moth so far we have arleady start compain with some different talent agencies</p>
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

