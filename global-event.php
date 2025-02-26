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
	 .announcement{
		margin:auto;
		width: 80%
	 }
	 span{
		color: yellow;
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
      			<li><a href="">ANNOUNCEMENT</a></li>
      			<li><a href="talent.php">TALLENT</a></li>
      			<li><a href="contuct.php">CONTACT US</a></li>
      			<li><a href='logout.php'>LOGOUT</a></li>
      			
      		</ul>
      	    </div>
            </div>

     <div class="content">
          <h1 class="content1"><center>TALENT MANAGEMENT SYSTEM</center></h1>
    </div>
    </div>
<form>
   
<div class="announcement">
	<h1 style="background: black; color: #fff;"><center>Announcement<center></h1>
<div class="announcement-container">
 <table style="margin-top:1rem;background-color:white; width: 100%;">
                  	<thead>
		    				<tr style="background-color: black; color: #fff;">
		    					<th style="padding:10px;">S/N</th>
		      				    <th>Heading</th>
		    					<th>Title</th>
		    					<th>Talent_name</th>
								<th>Date</th>
		    					<th>Download Pdf</th>
		    				</tr>
		    		</thead>

<?php
$sn=1;

$talent=$_SESSION['talent'];

$conn=mysqli_connect('localhost','root','','talentdb');

//if($conn){

	$sql="SELECT * FROM global_event WHERE talent_name='$talent'";
	$result=mysqli_query($conn,$sql);

	if($result){
		if(mysqli_num_rows($result)){
			
				while($row=mysqli_fetch_assoc($result)){
					?>

					<tbody>
		    					<tr>
		    					<td style="padding:10px;"><?php echo $sn ?></td>
		    					<td><?php echo  $row['heading']; ?></td>
		    					<td><?php echo  $row['title'];?></td>
		    					<td><?php echo  $row['talent_name'];?></td>
								<td><?php echo  $row['time'];?></td>
		    					<?php echo"<td><a href='./allfiles/'.$row[file]. target='_blank' style='color:green'>Download </a></td>" ?>;
		    				</tr>
		    			<tbody>


				
<?php   
$sn++; 

      }
   }
}

				
   
   ?>

	
     </table>
</div>
</div>
</form>

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
		 
		</div>
	</div>
</footer>

</body>
</html>

