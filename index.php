<?php
            session_start();
            include("flash-message.php");
            
            ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page ArtisanBD</title>
	<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>

	<?php include("navbar.html"); ?>

	<div id="body-container">
    		<div id="place-an-appointment">
    			<center>
    				<span>
    					<i><p style="color: #9E0000;text-decoration: none; font-size: 30px;">
    					<center><h3>Welcome To ArtisanBD</center></h3><br>
    					This is a website where you can post about your service and can hire people accoding to your need.<br>
    					Our aim is to eradicate proverty by making our country more service orienter. 
    					</p></i>
    				</span>
    			</center>
    			</div>
    	</div>

    	<div id="place-appointment">
    			<center>
    				<span>
    					<b><a href="registerForm.php"style="color: #02BA6B;text-decoration: none; font-size: 25px;">Sign Up</a></b>
    				</span>
    				<span>
    					<b><a href="LoginForm.php"style="color: #02BA6B;text-decoration: none; font-size: 25px;">Login</a></b>
    				</span>
    			</center>
    			</div>


<?php include("footer.html"); ?>
</body>
</html>