
<?php

$conn=mysqli_connect('localhost','root','','talentdb');

if($conn){
	

	if(isset($_POST['submit'])){

		if(isset($_POST['heading'])){
			$heading=$_POST['heading'];
		}
		if(isset($_POST['title'])){
			$title=$_POST['title'];
		}
		if(isset($_POST['file'])){
			$file=$_POST['file'];
		}
		if(isset($_POST['talent_name'])){
			$talent_name=$_POST['talent_name'];
		}
		$check="SELECT * FROM announcement WHERE heading='$heading' and title='$title' and talent_name='$talent_name'";
		$execute=mysqli_query($conn,$check);

		if(mysqli_num_rows($execute)>0){
			echo"<script>alert('announcement arleady exist')</script>";
		}else{

		$query="INSERT INTO announcement(heading,title,file,talent_name)VALUES('$heading','$title','$file','$talent_name')";

		$execute=mysqli_query($conn,$query);

		if($execute){
			echo"<script>alert('saved')</script>";
		}else{
			echo"<script>alert('not saved')</script>";
		}
	}
   }
}

?>