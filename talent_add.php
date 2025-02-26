<?php

$conn=mysqli_connect('localhost','root','','talentdb');

if($conn){	

	if(isset($_POST['add'])){

		if(isset($_POST['talent_name'])){
			$talentname=$_POST['talent_name'];
		}
		if(isset($_POST['talent_fee'])){
			$talentfee=$_POST['talent_fee'];
		}
	
		
		$check="SELECT * FROM talent WHERE talent_name='$talentname'";
		$execute=mysqli_query($conn,$check);

		if(mysqli_num_rows($execute)>0){
			echo"<script>alert('talent arleady exist')</script>";
		}else{

		$query="INSERT INTO talent(talent_name,talentfee)VALUES('$talentname','$talentfee')";

		$execute=mysqli_query($conn,$query);

		if($execute){
			echo"<script>alert('saved')</script>"; 
			header("location:admin-talent.php");
		}else{
			echo"<script>alert('not saved')</script>".mysqli_error($conn);
		}
	  }
	}
}
	

?>

