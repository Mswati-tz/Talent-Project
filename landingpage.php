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
		.body10{
			display:;
			justify-content: space-between;
		}
		.last{
	        width: 100%;
	        display: flex;
	        justify-content: space-between;
		}
		.image img{
			border-radius: 180%;
			width: 100px;
			height: 100px;
		}

	.maindiv{
	width: 50%;
	height: 330px;
	position: absolute;
	background-size: cover;
	background-image: url('{%static "img/logo1.jpg"%}');
	border-radius: 15px;
	box-shadow: 1px 4px 2px 1px rgba(0, 2, 0, 0.1); 
	animation: slider 15s infinite linear;
}

@keyframes slider{
	0%{ background-image: url('img/slider.jpg'); }
	35%{background-image: url('img/sliderpad.jpg')}
	75%{ background-image: url('img/logo2.jpg'); }
}

     .content{
          background-image: url('img/place.jpg');
          width: 100%;
          height: 350px;
          background-size: cover;
          background-position: relative;
          position: relative;
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

      <div class="all">
      	<div class="maindiv">
      		
      	</div>
      	<div class="about">
      		<h1 class="about2">About us</h1>
      		<h2 class="about3">Hire about us</h2>
      		<p>Our intentions and aims focus on quality and hygene of qualifying student talent so as to bring better tommorow</p>
      		<button class="button1">call us</button>
      	</div>
	  </div>
      		
      
      

      <div class="all-container">
          
		<div class="detail2" id="aidi">
			<div class="program">
				<h1>PROGRAM</h1>
			</div>
			<div class="dropdown">
				<button onclick="show_hide()" class="button-drop" style="background-color: royalblue;">Choose Program</button>

				<div id="list-items">
					<li><a href="">Dancing</a></li><hr>
					<li><a href="">2</a></li><hr>
					<li><a href="">150000</a></li><hr>
					<li><a href="">15/1/2012</a></li><hr>
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
			<button style="margin-top: 2%;">view all</button>
		</div>

		<div class="detail3" id="aidi">
			<div class="announcement">
				<h1>ANNOUNCEMENT</h1>
			</div>
			<div class="announces">
				<div class="ano1">
					<p>MKUTANO</p><br><hr>
					<p>MKUTANO</p>
				</div>
				<div class="date">
					<p>12/01/2020</p>
				</div>
			</div>
			<button>view all</button>
</div>
      </div>


      

</body>
</html>