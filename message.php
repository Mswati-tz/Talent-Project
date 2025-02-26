<?php

$conn=mysqli_connect('localhost','root','','talentdb');

if($conn){
	

	if(isset($_POST['submit'])){

		if(isset($_POST['email'])){
			$email=$_POST['email'];
		}
		if(isset($_POST['message'])){
			$message=md5($_POST['message']);
		}

		$check="SELECT email,message FROM message WHERE email='$email' and message='$message'";

		$execute=mysqli_query($conn,$check);

		if(mysqli_num_rows($execute)>0){
			header("location:home.php");

		}else{
			$input="INSERT INTO message(email,message_content)VALUES('$email','$message')";
			$execut=mysqli_query($conn,$input);

			if($execut){
				echo "sent";
			}
			else{
				echo "not sent";
			}
		}

	}
}
?>