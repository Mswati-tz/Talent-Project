<?php

$conn=mysqli_connect('localhost','root','','talentdb');

if($conn){

$id="";
if(isset($_GET['id'])){
	$id=$_GET['id'];
}

$sql="DELETE FROM talent WHERE talent_id='$id'";
$execute=mysqli_query($conn,$sql);

if($execute){
	
	header("location:admin-talent.php");
	//echo "<script>alert('Change detected')</script>";
}else{
	echo "failed to delete";
}
 
}else{
	echo "not connected";
}
mysqli_close($conn);
?>