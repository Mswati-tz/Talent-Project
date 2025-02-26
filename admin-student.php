<html>

<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/admin-panel.css">
</head>
<style>


</style>

<body>
	
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
					<a href=""><span></span><span>Student</span></a>
				</li>
				<li>
					<a href="admin-talent.php"><span></span><span>Talent</span></a>
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
		<form action="student_add.php" method="POST">
		  <div class="manage">
		    	<div class="Student">
		    		<div class="student-content1" id="student-id" style="display: nne">
		    			<div class="student-detail">

		    				
		    				<h1>Student</h1>
		    				<p style="margin-left: 2rem;">home</p>
		    				<p style="margin-left: 2rem;">Entertainment</p>
		    				<button style="margin-left: 29rem; border: none; background-color: springgreen; align-items: center;" onclick="show_student()">add student</button></p>

		    					<script>
		    						function show_student(){
		    							var student = document.getElementById("list-student");

		    		                              if(student.style.display ==="none"){
		    		                             	student.style.display="block";
		    	                                  	}else{
		    			                              student.style.display="none";
		    	                                 	}
		    	                         }
		    					</script>
		    			</div>
		    	
		    		<div class="Student-content2" id="list-student" style="display:none">

		    			Fullname:<input type="text" name="fullname" required>

		    			Registration-number:<input type="text" name="regno" required>

		    			Gender:<input type="text" name="gender" required>

		    			Resident:<input type="text" name="resident">

		    			TalentName:<input type="text" name="talent_name" required>

		    		    Password:<input type="password" name="password" required>

		    			Email:<input type="email" name="email" required>


		    			<button type="submit" name="submit">Save</button>
		    		</div>
    </form>

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

		    			<table style="margin-top:1rem; background-color:white; width: 100%;">
		    				<thead>
								<tr>
		    					<th style="padding:10px;">S/N</th>
		    					<th>Fullname</th>
		    					<th>Reg no</th>
		    					<th>Gender</th>
								<th>Resident</th>
		    					<th>TalentName</th>
								<th>Email</th>
		    					<th>Status</th>
		    					<th>Delete</th>
								<th>Edit</th>
		    				</tr>
						    </thead>

<?php							$conn=mysqli_connect('localhost','root','','talentdb');
$sn="";
$conn=mysqli_connect('localhost','root','','talentdb');
if($conn){

	$sql="SELECT * FROM users";
	$result=mysqli_query($conn,$sql);

	if($result){
		if(mysqli_num_rows($result)){
			while($row=mysqli_fetch_array($result)){
				$sn == 0; $sn++;
				
   
   ?>
		    				
							<tbody>
								<tr>
		    					<td style="padding:10px;"><?php echo $sn; ?></td>
		    					<td><?php echo $row['fullname']; ?></td>
		    					<td><?php echo $row['regno']; ?></td>
		    					<td><?php echo $row['gender']; ?></td>
		    					<td><?php echo $row['resident']; ?></td>
								<td><?php echo $row['talent_name']; ?></td>
								<td><?php echo $row['email']; ?></td>
		    					<td><?php echo $row['status']; ?></td>
		    					<td><a href="student_delete.php?id=<?php echo $row['user_id']?>">Delete</a></td>
								<td><a href="student_edit.php?id=<?php echo $row['user_id']?>">Edit</a></td>
		    				    </tr>
							</tbody>
		    		

					<?php
			}
		}
	}
}



		    			?>




		    	
                        </table>
		    		</div>

		    	</div>
		    </div>

            </div>

        
     </footer>
	</body>
	</html>