<html>

<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/admin-panel.css">
</head>


<body>
	<form action="announcement_add.php" method="POST">
	<div class="sidebar">
		<div class="sidebar-header">
			<div class="sidebar-logo">
				<img src="pictures/iaa logo.png" width="100px" height="100px" style="border-radius: 180%;">
			</div>

			<div class="sidebar-title">
				<span><h4 style="margin-bottom: 5%;">Administration Panel</h4></span>
			</div>
		</div><hr>

		<div class="sidebar-menu">
			<ul>
				<li>
					<a href="admin-student.php"><span></span><span>Student</span></a>
				</li>
				<li>
					<a href="admin-talent.php"><span></span><span>Talent</span></a>
				</li>
				
				<li>
					<a href=""><span></span><span>Announcement</span></a>
				</li>
				
				<li>
					<a href="logout.php"><span></span><span>logout</span></a>
				</li>

		</div>
	</div>

	<header>	
		<div class="dashboad">
			<span></span>
			<span>Dashboard</span>
		</div>

		<div class="search">
			<span></span>
			<span>
				<input type="text" name="search" placeholder="search------">
			</span>
		</div>

		<div class="user">
			<div class="">
			   <span><img src="pictures/admin.png" width="60px" height="60px" style="border-radius:180%;"></span>
		    </div>
		    <div class="user-name">
		    	<span>Augustino</span><br><hr>
		    	<span>Admin</span>
		    </div>
		</div>
	</header>


	<footer>
		<div class="manage">

		    	<div class="Announcement">
		    		<div class="announcement-content1" id="announcement-id" style="display: nne">
		    			<div class="announcement-detail">
		    				<h1>Announcement</h1>
		    				<p style="margin-left: 2rem;">home</p>
		    				<p style="margin-left: 2rem;">Entertainment</p>
		    				<button style="margin-left: 20rem; border: none; background-color: springgreen; align-items: center;" onclick="show_announcement()">add announcement</p>

		    					<script>
		    						function show_announcement(){
		    							var announcement = document.getElementById("list-announcement");

		    		                              if(announcement.style.display ==="none"){
		    		                             	announcement.style.display="block";
		    	                                  	}else{
		    			                              announcement.style.display="none";
		    	                                 	}
		    	                         }
		    					</script>
		    			</div>
		    	
		    		<div class="announcement-content2" id="list-announcement" style="display:none">
		    			Heading:<input type="text" name="heading" required>
		    			Title:<input type="text" name="title" required>
		    			File:<input type="file" name="file" required>

<?php 
$conn=mysqli_connect('localhost','root','','talentdb');

if($conn){
  

    echo "Talent<select name='talent_name'>";
	$sql="SELECT * FROM talent";
	$result=mysqli_query($conn,$sql);

	if($result){
		if(mysqli_num_rows($result)){
			while($row=mysqli_fetch_assoc($result)){

				echo'
				         <option value="'.$row['talent_name'].'">
				            '.$row['talent_name'].'
				          </option>>
				     ';
     }
     echo"</select>";
   }
  }
}

?>
		    			

		    			<button type="submit" name="submit">Save</button>
		    		</div>

		    		<div class="collection" style="margin-top: 1rem; padding:5px">
		    		<button  onclick="view()" style="padding:10px; width:100px; border-radius:5px; border:none; background-color: yellow;">view</button>
		    	

		    		
		                       <script>
		    						function view(){
		    							var student = document.getElementById("student-table");

		    		                              if(student.style.display ==="none"){
		    		                             	student.style.display="block";
		    	                                  	}else{
		    			                              student.style.display="none";
		    	                                 	}
		    	                         }
		    					</script>
		    		
		    		<div>

		    		<div class="student-detail" id="student-table" style="display:none">

		    			<table style="margin-top:1rem;background-color:white; width: 100%;">
		    				<thead>
		    				<tr>
		    					<th>S/N</th>
		    					<td>Announcement_heading</td>
		       					<td>Title</td>
		    					<td>File</td>
		    					<td>Delete</td>
		    					
		    				</tr>
		    			    </thead>

<?php

$conn=mysqli_connect('localhost','root','','talentdb');
$sn="";
if($conn){

	$sql="SELECT * FROM announcement";
	$result=mysqli_query($conn,$sql);

	if($result){
		if(mysqli_num_rows($result)){
			while($row=mysqli_fetch_array($result)){
				$sn==1; $sn++;
				
   
   ?>
		    				<tbody>
		    				<tr>
		    					<th><?php echo $sn; ?></th>
		    					<td><?php echo $row['heading']; ?></td>
		    					<td><?php echo $row['title']; ?></td>
		    					<td><?php echo $row['file']; ?></td>
		    					
		    					<td>
		    						<a href="announcement_delete.php?=id <?php echo $row['announcement_id'];?>">Delete</a>
		    					</td>
		    					
		    					
		    				</tr>
		    				</tbody>
<?php

			}

		}
	}
}



?>
		    		</div>

	</table>
		    	</div>
		    </div>
         </div>
     </footer>
	</body>
	</html>