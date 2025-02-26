<?php

session_start();

$conn=mysqli_connect('localhost','root','','talentdb');

if($conn){
	$regno=null;
	$password=null;

	if(isset($_POST['submit'])){

		if(isset($_POST['regno'])){
			$regno=$_POST['regno'];
		}
		if(isset($_POST['password'])){
			$password=md5($_POST['password']);
		}

		$check="SELECT regno,`password`,talent_name FROM users WHERE `regno`='$regno' and `password`='$password' and `status`='approved'";
        
        $execute=mysqli_query($conn,$check);


		if(mysqli_num_rows($execute)>0){

			$row=(mysqli_fetch_assoc($execute));
			$regno=$row['regno'];
			$talent=$row['talent_name'];

			$_SESSION['regno']=$regno;
			$_SESSION['talent']=$talent;
			header("location:home.php");

		}else{
			echo "<div class='appr' style='background: red; color:#fff; padding:10px; width:40%; display:flex; justify-content:center; space-between; margin: auto; align-content:center;'>
			      <p>your not approved <a href='login.php' style='align-content: display: flex; center; text-decoration:none; background:orange; color:#fff; padding:5px; margin-left: 10px;'>back</a></p>
				  
				 <div> ";
		}
		

	}
}
?>