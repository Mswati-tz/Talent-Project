<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style>
	body{
		background-image: url("pictures/poo.jpg");
		background-size: cover;
	}
	form{
		display: flex;
		margin-top: 4%;
		justify-content: center;
	}
	.container{
		background-color: #fff3;
		background-size: cover;
		position: relative;
		padding: 50px 50px 50px 50px;
		border-radius: 5px;
		box-shadow: 5px 5px 20px black;
		margin-top: 8rem;
	}
	.register{
		width: 300px;
		margin: auto;
		color: black;
	}
	.register input{
		border: none;
		padding: 9px;
		margin-bottom: 5px;
		width: 100%;
		border-radius: 5px;
		border-color: none;
		border-style: none;
	}
	span{
		color:orange;
	}
</style>



<body>
    <form action="login_data.php" method="POST">
    	<div class="container">
        <div class="register">
        	<h1 style="color: #fff;">Login<span>-Panel</span></h1>
  	       

 	         <labber style="float: left;">Registration-number:</labber>
 	         <input type="" name="regno" placeholder="regno" required>

	       

	         <labber style="float: left;">Password:</labber>
	         <input type="password" name="password" placeholder="password" required>

            

             <input type="submit" name="submit" value="Login" style="background-color: #fff5; width: 50%;">
    	</div>
        </div>

    </form>
</body>
</html>