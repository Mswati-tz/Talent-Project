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