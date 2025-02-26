<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>

<style>
    .container{
        width: 90%;
        margin:auto;
    }
    .holder img{
        width: 100%;
        height: 400px;
    }
    table{
        padding: 100px;
        box-shadow: 5px 5px 20px black;
    }
    table th,td{
        padding: 50px;
    }
    .footer{
	display: flex;
	justify-content: space-between;
	background-color: rgb(12, 11, 11);
	color: #fff;
	margin-top: 4rem;
}
</style>
<body>

    <div class="container">
        <div class="holder">
            <img src="img/programing.jpg" alt="">
            <div class="detail">
                <h1 style="background: green; text-align: center; color: #fff;";>About Programing</h1>
                <h2>Offers For Programing</h2>
                <p>
                    <table>
                    <thead>
                        <tr style="background: black; color:#fff;">
                             <th>Offer</th>
                             <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                             <td><b>Hardware and software resources</b></td>
                             <td>We offer and provide resources to allow supportive enviroment for a programer to work successfully</td>
                        </tr>
                        <tr>
                            <td><b>Knowledge</b></td>
                            <td>We provide advanced and scientifical knowledge that will carry up programer capability</td>
                        </tr>


                        
                        <tr>
                        <?php
					
					$conn=mysqli_connect('localhost','root','','talentdb');
                    
                    //$id="";

					if($conn){
                         
						$sql="SELECT * FROM talent WHERE talent_id=6";
						$execute=mysqli_query($conn,$sql);

						if($execute){

							if(mysqli_num_rows($execute)){
                                    while($row=mysqli_fetch_array($execute)){
										?>
                                                        
                                                          
                                                              <td style="padding:10px;"><?php echo $row['talent_name'] ?></td>
                                                              <td><?php echo $row['talentfee'] ?></td>
                                                           

					<?php
									}
							}
						}
					}
					else{
						echo "no connection";
					}
					
					
					?>
                    </tr>




                        <tr>
                            <td><a href="registration.php" style="background: orange; padding:10px; border-radius: 5px; text-decoration: none; color:#fff;">register</a></td>
                        </tr>
                    </tbody>
                </table></p>
            </div>
        </div>
    </div>

    

<footer>
	<div class="footer">
		<div class="footer1">
			<h3>Contact-us</h3>
			<p>Tell:+255 628 651 430</p>
			<p>Email:augustinofuluge@gmail.com</p>
			<p>Address:Box 994 Mbeya</p>
		</div>
		<div class="footer2">
			<h3>Follow-us</h3>
			<p>WhatsApp:+255 628 651 430</p>
			<p>Email:augustinofuluge@gmail.com</p>
			<p>Facebook:Augustino Fuluge</p>
			<p>Instergram:Senior-agxt</p>
			<p>Twitter:Mswati</p>
		</div>
		<div class="footer3">
			<h3>Opinions & sugestions</h3>
			<form method="POST">
			<p>Tell:+255 628 651 430</p>
			<p><input type="email" name="user-email" placeholder="Enter your email" required></p>
			<p><textarea name="user-text" placeholder="sugestions....." required></textarea></p>
			<p><input type="submit" name="sugestion" value="send"></p>
		   </form>
		</div>
	</div>
</footer>

</body>
</html>