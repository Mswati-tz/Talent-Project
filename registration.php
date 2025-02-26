<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style>
	body{
		background-image: url("img/jaba (2).jpg");
		background-size: cover;
	
	}
	form{
		display: flex;
		margin-top: 4%;
		justify-content: center;
	}
	.container{
		background-color: #fff3;
		background-size: cover;
		position: relative;
		padding: 50px 50px 50px 50px;
		border-radius: 5px;
		box-shadow: 5px 5px 20px black;
	}
	.register{
		width: 300px;
		margin: auto;
		color: solid black;
	}
	.register input{
		border: none;
		padding: 9px;
		margin-bottom: 5px;
		width: 100%;
		border-radius: 5px;
		border-color: none;
		border-style: none;
	}
	#demo{
		padding: 5px;
		float: left;
		margin-bottom: 10px;
		width: 100%;
	}
	#demo option{
		text-align: center;
		align-content: center;
		background-color: green;

	}
	span{
		color: black;
	}
</style>



<?php
   
   $conn=mysqli_connect('localhost','root','','talentdb');

   if($conn){
   
   	if(isset($_POST['submit'])){

   		if(isset($_POST['fullname'])){
   			$fullname = $_POST['fullname'];
   		}
   		if(isset($_POST['regno'])){
   			$regno = $_POST['regno'];
   		}
   		if(isset($_POST['gender'])){
   			$gender = $_POST['gender'];
   		}
   		if(isset($_POST['resident'])){
   			$resident = $_POST['resident'];
   		}
   		if(isset($_POST['talent_name'])){
   			$talent_name = $_POST['talent_name'];
   		}
   		if(isset($_POST['password'])){
   			$password = md5($_POST['password']);
   		}
   		if(isset($_POST['email'])){
   			$email = $_POST['email'];
   		}

   		$avoid="SELECT * FROM users WHERE email = '$email'";
   		$execute = mysqli_query($conn,$avoid);

   		if(mysqli_num_rows($execute)>0){
   			echo"<script>alert('user arleady exist')</script>";
   		}else{
   			$query="INSERT INTO users(fullname,regno,gender,resident,talent_name,password,email) VALUES('$fullname','$regno','$gender','$resident','$talent_name','$password','$email')";

   			$execute_query=mysqli_query($conn,$query);

   			if($execute_query){
   			    echo"<script>alert('Registration Success')</script>";

   		     }else{
                echo"<script>alert('Registration Failed')</script>".mysqli_error($conn);
   		     }
   		}
   	}
   }
   else{
   	echo "no enternet";
   }
?>
<body>
    <form method="POST">
    	<div class="container">
        <div class="register">
        	<h1 style="color: #fff;"><span>Registration</span>-Panel</h1>
  	         <labber style="float: left;">fullname:</labber>
  	         <input type="" name="fullname" placeholder="fullname" required>

 	         <labber style="float: left;">Registration-number:</labber>
 	         <input type="" name="regno" placeholder="regno" required>

	         <labber style="float: left;">Gender:</labber><br><br>

	         <div class="gender" style="display: flex; float: left;">
	            <input type="radio" name="gender" value="male" required>Male
	            <input type="radio" name="gender" value="female" required>Female
	         </div><br><br>
              
             <div class="resident">
	         <labber style="float: left;">Resident:</labber><br>
	         <select  name="resident" style="float:left; width: 100%; padding: 5px;">
	         	<option name="resident" value="Tanzania">Tanzania</option>
	         	<option name="resident" value="Mbeya">Mbeya</option>
	         	<option name="resident" value="Arusha">Arusha</option>
	         	<option name="resident" value="Dar es salaam">Dar es salaam</option>
	         	<option name="resident" value="Dodoma">Dodoma</option>
	         	<option name="resident" value="Iringa">Iringa</option>
	         	<option name="resident" value="Mwanza">Mwanza</option>
	         	<option name="resident" value="Other">Other</option>
	         </select>
             </div><br><br><br><br>

             <labber style="float: left;">Select Talent:</labber><br>
<?php 
$conn=mysqli_connect('localhost','root','','talentdb');

if($conn){
  

    echo "<select name='talent_name' id='demo'>";
	$sql="SELECT * FROM talent";
	$result=mysqli_query($conn,$sql);

	if($result){
		if(mysqli_num_rows($result)){
			while($row=mysqli_fetch_assoc($result)){

				echo'
				         
				         <option value="'.$row['talent_name'].'">
				            '.$row['talent_name'].'<hr class="hr">
				          </option>
				     ';
     }
     echo"</select>";
   }
  }
}

?>

	       
             <br><br><br><br>
	         <labber style="float: left;">Password:</labber>
	         <input type="password" name="password" placeholder="password" required>

             <labber style="float: left;">Email:</labber>
             <input type="email" name="email" placeholder="email" required>

             <input type="submit" name="submit" value="Register" style="background-color: maroon; width: 50%;">
             <button style="padding: 9px; background-color: #fff5; border-radius: 5px;"><a href="login.php" style="text-decoration: none; color: black;">Login</button>
    	</div>
        </div>

    </form>
</body>
</html>