 <?php
 session_start();

 $conn=mysqli_connect('localhost','root','','talentdb');

if(isset($_POST['submit'])){
    $id=	$_SESSION['id'];

	$tname=$_POST['talent_name'];
	$tfee=$_POST['talentfee'];
	$query="SELECT talent_id FROM talent WHERE talent_name='$tname' and talentfee='$tfee'";
	$result=mysqli_query($conn,$query);


	if($result){
		if(mysqli_num_rows($result)>0){
			echo "please no changes detected";
		}
		else{
		   $query="UPDATE talent SET talent_name='$tname', talentfee='$tfee'WHERE talent_id='$id'";
		   $result=mysqli_query($conn,$query);

		   if($result){
		   	echo "update completely";
		   	header("location:admin-talent.php");
		   }else{
		   	echo "not updated";
		   }
		}
	}
}


?>

