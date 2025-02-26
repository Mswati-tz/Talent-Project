<html>

<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/admin-panel.css">
</head>



<body>
	<form method="POST" action="talent_add.php">
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
					<a href=""><span></span><span>Talent</span></a>
				</li>
				
				<li>
					<a href="admin-announcement.php"><span></span><span>Announcement</span></a>
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

		    	<div class="Talent">
		    		<div class="Talent-content1" id="Talent-id" style="display: nne">
		    			<div class="Talent-detail">
		    				<h1>Talent</h1>
		    				<p style="margin-left: 2rem;">home</p>
		    				<p style="margin-left: 2rem;">Entertainment</p>
		    				<button style="margin-left: 28rem; border: none; background-color: springgreen; align-items: center;" onclick="show_Talent()">add Talent</p>

		    					<script>
		    						function show_Talent(){
		    							var Talent = document.getElementById("list-Talent");

		    		                              if(Talent.style.display ==="none"){
		    		                             	Talent.style.display="block";
		    	                                  	}else{
		    			                              Talent.style.display="none";
		    	                                 	}
		    	                         }
		    					</script>
		    			</div>
		    	
		    		<div class="Talent-content2" id="list-Talent" style="display:none">
		    			TalentName:<input type="text" name="talent_name" required><br><br>
		    			TalentFee:<input type="text" name="talent_fee" required><br><br>
	
		    			<button type="submit" name="add">Save</button>
     	    			
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
		      					<th>TalentName</th>
		    					<th>Delete</th>
		    					<th>Edit</th>
		    				</tr>
		    		</thead>

<?php

$conn=mysqli_connect('localhost','root','','talentdb');
$sn="";
if($conn){

	$sql="SELECT * FROM talent";
	$result=mysqli_query($conn,$sql);

	if($result){
		if(mysqli_num_rows($result)){
			while($row=mysqli_fetch_array($result)){
				$sn == 0; $sn++;
				
   
   ?>

		    				<tbody>
		    					<tr>
		    					<td><?php echo $sn ?></td>
		    					<td><?php echo $row['talent_name']?></td>
		    					<td><a href="talent_delete.php?id=<?php echo $row['talent_id'] ?>">Delete</a></td>
		    					<td><a href="talent_edit.php?id=<?php echo $row['talent_id'] ?>">Edit</td>
		    				</tr>
		    				<tbody>
		    			

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