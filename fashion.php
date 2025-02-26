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
            <img src="img/fashion.jpg" alt="">
            <div class="detail">
                <h1 style="background: green; text-align: center; color: #fff;";>About Fashion & Designer</h1>
                <h2>Offers For Fashion & Designer</h2>
                <p>
                    <table style="">
                    <thead>
                        <tr>
                             <th>Offer</th>
                             <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                             <td><b>Hardware and software resources</b></td>
                             <td>We offer and provide resources to allow supportive enviroment for a fashionist to work successfully</td>
                        </tr>
                        <tr>
                            <td><b>Knowledge</b></td>
                            <td>We provide advanced and scientifical knowledge that will carry up fashionist capability</td>
                        </tr>




                        <tr>
                        <?php
					
					$conn=mysqli_connect('localhost','root','','talentdb');
                    
                    //$id="";

					if($conn){
                         
						$sql="SELECT * FROM talent WHERE talent_id=19";
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