<?php

session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/allstyle.css">

</head>
<body>
	<style>
		

	.maindiv{
	width: 50%;
	height: 330px;
	position: absolute;
	background-size: cover;
	background-image: url("img/sing (2).jpg");
	border-radius: 15px;
	box-shadow: 1px 4px 2px 1px rgba(0, 2, 0, 0.1); 
	animation: slider 15s infinite linear;
}

@keyframes slider{
	0%{ background-image: url('img/jaba (1).jpg'); }
	35%{background-image: url('img/jaba (2).jpg'); }
	75%{ background-image: url('img/jaba (3).jpg'); }
	
}

     .content{
          background-image: url('img/jaba (3).jpg');
          width: 100%;
          height: 700px;
          background-size: cover;
          background-position: relative;
          position: relative;
	     }
		 .content1{
     color: #fff;
	 transform: translate(0%,750%);
}
</style>

 <div class="header">
      	
      		<div class="logo-container">
      			<h1 style="color:#fff">GO<span>TALENT</span></h1>
      		</div>

               <div class=inner-header>
      		<ul>
      			<li><a href="">HOME</a></li>
      			<li><a href="registration.php">REGISTER</a></li>
      			<li><a href="login.php">LOGIN</a></li>
      			
      		</ul>
      	     </div>
      </div>

     <div class="content">
          <h1 class="content1"><center>TALENT MANAGEMENT SYSTEM</center></h1>
    </div>



<body>

<style>

    .top{
		
		position: relative;
	}
   .container-card{
	display:flex;
	justify-content: space-around;
   }
   .card{
	height:300px;
	margin: 50px;
	overflow: hidden;
	border-radius:10px;
   }
   .intro{
	height:90px;
	width:350px
	position:absolute;
	background-color: #fff;
	color:#fff;
	transition: .5s;
	margin-top:-30px;
   }
   .intro p{
	visibility: hidden;
	opacity: 0;
   }
   .intro p a{
	background: black;
	color: #fff;
	padding: 8px;
	border-radius: 5px;
	text-decoration: none;
	margin-left: 70%;
   }
   .card:hover .intro{
	height:250px;
	background:green;
   }
   .card:hover p{
	visibility: visible;
	opacity: 1;
   }
   .card:hover img{
	tranform: scale(1.1) rotate(-3deg);
   }
</style>
      <div class="all">
      	<div class="maindiv">
      		
      	</div>
      	<div class="about">
      		<h1 class="about2">About us<hr></h1>
      		<h2 class="about3">Hire about us</h2>
      		<p>Our intentions and aims focus on quality and hygene of qualifying student talent so as to bring better tommorow</p>
      		<button class="button1">call us</button>
      	</div>
	  </div>


	
      		
      
      

      <div class="all-container">
          
		<div class="detail2" id="aidi">
			<div class="program">
				<h1>TALENT FEE</h1>
			</div>
			<div class="dropdown">
				<button onclick="show_hide()" class="button-drop" style="background-color: royalblue;">View Talents</button>

				<div id="list-items" style="margin-left: 5%; margin-top: 1rem; display:none;">
					<table style="width:100%; background-color:  #ffffff52; box-shadow: 5px 5px 20px black;">
						<thead style="background-color: black; color: #fff;">
							<tr>
							    <th style="padding:10px;">Talent_Heading</th>
							    <th>Talent_Fee</th>
								
						     </tr>
						</thead>
					
					<?php
					
					$conn=mysqli_connect('localhost','root','','talentdb');

					if($conn){
                         
						$sql="SELECT * FROM talent";
						$execute=mysqli_query($conn,$sql);

						if($execute){

							if(mysqli_num_rows($execute)){
                                    while($row=mysqli_fetch_array($execute)){
										?>
                                                        <tbody>
                                                           <tr>
                                                              <td style="padding:10px;"><?php echo $row['talent_name'] ?><hr></td>
                                                              <td><?php echo $row['talentfee'] ?></td>
															  
                                                           </tr>
                                                        </tbody>
					<?php
									}
							}
						}
					}
					else{
						echo "no connection";
					}
					
					
					?>
					</table>
				</div>
			
		    </div>

		    <script>
		    	
		    	function show_hide(){
		    		var click = document.getElementById("list-items");

		    		if(click.style.display ==="none"){
		    			click.style.display="block";
		    		}else{
		    			click.style.display="none";
		    		}
		    	}
		    </script>
			
		</div>

	
</div>
      </div>

	  



	  <div class="top">
	<div class="container-card">
      <div class="card">
		<img src="pictures/programing.jpg" alt="" width="100%" height="200 px">
		   <div class="intro">
			<h2 style="text-align:center;">Programing</h2>
			<p>Programing is all abot coding and learning different languages especially backhand languages like python, c++ and java</p>
		    <p><a href="programing.php">more</a></p>   
		</div>
	  </div>
	  <div class="card">
	    <img src="pictures/cm.jpg" alt="" width="100% px" height="200 px">
		<div class="intro">
			<h2 style="text-align:center; color: #fff;">Singer</h2>
			<p>Singing is all about learning different volume adjustments and beats and key codes that gonne be used in piano and other tools</p>
		    <p><a href="singer.php">more</a></p>
		</div>
	  </div>
	  <div class="card">
	    <img src="pictures/logo2.jpg" alt="" width="100% px" height="200 px">
		<div class="intro">
			<h2 style="text-align:center; color: #fff;">Graphics</h2>
			<p>Graphics is all about learning different way to capture and design pictures and logo via different tools and softwares like adobephotoshop,adobeillustrator and other more</p>
			<p><a href="graphics.php">more</a></p>
		   </div>
	  </div>
	</div>
</div>

<div class="top">
	<div class="container-card">
      <div class="card">
		<img src="pictures/suit.jpeg" alt="" width="100%" height="200 px">
		   <div class="intro">
			<h2 style="text-align:center;">Fashion & Designer</h2>
			<p>Fashion & Designing is all about crativity of a self parson that we could go and intergrate with other while we learning together</p>
		    <p><a href="fashion.php">more</a></p>   
		</div>
	  </div>
	  <div class="card">
	    <img src="img/jaba (3).jpg" alt="" width="100% px" height="200 px">
		<div class="intro">
			<h2 style="text-align:center; color: #fff;">Dancer</h2>
			<p>Dancing is all about phisical excersise where we could made and learn differnt and interested stoms</p>
		    <p><a href="dancers.php">more</a></p>   
		</div>
	  </div>
	  <div class="card">
	    <img src="pictures/logo2.jpg" alt="" width="100% px" height="200 px">
		<div class="intro">
			<h2 style="text-align:center; color: #fff;">Footbal</h2>
			<p>Footbal is all about daily training through sessions for body flexibility and capability</p>
		    <p><a href="footbal.php">more</a></p>   
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
		
</footer>

</body>
</html>