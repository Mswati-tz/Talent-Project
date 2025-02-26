<?php
 session_start();

 $conn=mysqli_connect('localhost','root','','talentdb');

if(isset($_POST['submit'])){

    $id =	$_SESSION['id'];

	$fullname=$_POST['fullname'];
    $regno=$_POST['regno'];
    //$gender=$_POST['gender'];
    $email=$_POST['email'];
    //$password=$_POST['password'];
    $status=$_POST['status'];

	$query="SELECT fullname,regno,email,status FROM users WHERE fullname='$fullname' and regno='$regno' and email='$email' and status='$status'";
	$result=mysqli_query($conn,$query);


	if($result){
		if(mysqli_num_rows($result)>0){
			echo "<script> alert('please no changes detected')</script>";
		}
		else{
		   $query="UPDATE users SET fullname='$fullname',regno='$regno',email='$email',status='$status' WHERE user_id='$id'";
		   $result=mysqli_query($conn,$query);

		   if($result){
		   	echo "update completely".mysqli_error($conn);
		   	header("location:admin-student.php");
		   }else{
		   	echo "not updated".mysqli_error($conn);
		   }
		}
	}
}


?>

