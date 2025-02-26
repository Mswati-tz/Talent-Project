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
	 span{
		color: rgb(212, 18, 18);
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
      			<li><a href="talent.php">TALLENT</a></li>
      			<li><a href="">CONTACT US</a></li>
      			<li><a href='logout.php'>LOGOUT</a></li>
      			
      		</ul>
      	    </div>
            </div>

     <div class="content">
          <h1 class="content1"><center>TALENT MANAGEMENT SYSTEM</center></h1>
    </div>
    </div>
<style>
	.contact{
       width: 80%;
	   margin: auto;
	}
	.us table{
		width: 100%;
		padding: 100px 100px;
	}
	thead th{
		padding: 10px 10px 10px;
	}
	tbody td{
		padding: 10px 10px 10px;
	}
</style>
<div class="contact">
    <div class="us">
        <table>
            <thead>
                <tr style="background: black; color: #fff";>
                    <th>Media</th>
                    <th>Local</th>
                    <th>Address</th>
                </tr>
            </thead>
			<tbody>
				<tr>
					<td>instergram</td>
					<td>Phone: +255 628 651 430</td>
					<td>augustinofuluge@gmail.com</td>
				</tr>
				<tr>
					<td>facebook</td>
					<td>Phone: +255 744 154 271</td>
					<td>instergram</td>
				</tr>
				<tr>
					<td>twitter</td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
        </table>
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

