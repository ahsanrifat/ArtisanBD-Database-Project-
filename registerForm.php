<?php
            session_start();
            
            include("flash-message.php");
            
            ?>
<html>
    <head>
        <title>New Account</title>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
    <?php include("navbar.html"); ?>        
            <CENTER>
            <div class="container" style="margin-bottom: 80px;">
               
            <form action="registerVerify.php" class="register" enctype="multipart/form-data" method="POST">
            
            <h2 id="place-appointment"> Sign Up </h2>
            
            <input id="place" type="text" name="firstName" placeholder="Enter First Name"required>
            
            <input id="place" type="text" name="lastName" placeholder="Enter Last Name"><br><br>
            
            <input type="radio" name="gender" value="male" checked> Male 
            
            <input type="radio" name="gender" value="female"> Female
            
            
            <input  type="radio" name="gender" value="other"> Other<br><br>
            
            <input id="place" type="email" name="email" placeholder="Ener your email address"required><br><br>
                       
            <input id="place" type="password" name="password" placeholder="Create a password"required><br><br>
            
            <input id="place"type="password" name="confirmPassword" placeholder="confirm password"required><br><br>
            
            <input id="place" type="file" name="avatar"   placeholder="upload your profile picture" accept="image/*"><br><br>
             
                      
            <input style="color: white; background-color: #02BA6B;" id="place" type="submit" value="Create Account" name="upload" />
            
        </form><br>
         
        <a id="place" href="LoginForm.php" style="font-size: 15px; color: #02BA6B;text-decoration: none;">Already Have An Account, Login </a> </p>

        </div>
            
    </CENTER>
    <?php include("footer.html"); ?>
    </body>
</html>