<?php
session_start();



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">


	<title></title>
</head>
<style>
	.edit{
		margin: auto;
		width: 80%;
		border-radius: 5px 5px 5px 5px;
	}
	.edit-student{
		box-shadow: 5px 5px 20px black;
	}
	.edit-student h1{
		background: black;
		color: #fff;
		text-align: center;
		padding: 10px;
	}
	.edit-student input{
		width: 70%;
		border: none;
		padding: 10px;
		margin-bottom: 1rem;
		margin-left: 3rem;
	}
</style>


<body>

<form method="POST" action="talent_edit2.php">




<?php

$conn=mysqli_connect('localhost','root','','talentdb');

if($conn){

	$_SESSION['id']=$_GET['id'];

	$id="";
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		
		}

	$sql="SELECT * FROM talent WHERE talent_id='$id'";
	$execute=mysqli_query($conn,$sql);

	if($execute){
		if(mysqli_num_rows($execute)>0){
			if($row=mysqli_fetch_assoc($execute)){
				echo '<div class="edit">';
			    echo '<div class="edit-student">';
			  echo'<h1>Edit Talent</h1><br>';
               echo'<input type="text" value="'.$row['talent_name'].'" name="talent_name"><br>';
			   echo'<input type="text" value="'.$row['talentfee'].'" name="talentfee"><br>';
               echo'<input type="submit" name="submit"><br>';
			   echo'</div>';
			   echo'</div>';
               echo'</form>';
			}
		}
	}
}else{

}
mysqli_close($conn);

?>






</body>
</html>