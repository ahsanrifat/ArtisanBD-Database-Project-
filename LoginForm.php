<?php
            session_start();

            include("flash-message.php");
            
            if(isset($_SESSION['isLogIn'])){

                if($_SESSION['isLogIn']=='yes'){
                    header("Location: profilePage.php");
                }    
            }
            
?>
<html>
    <head>
        <title>Login Form</title>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include("navbar.html"); ?>
    <center>
            <div  style="margin-top: 100px; margin-bottom: 80px;">
             
                <h2 id="place-appointment"> Login </h2>

            <form  method="post" enctype="multipart/form-data" action="LoginVerify.php">
                
         
              
                
                <input  id="place"  type="email" placeholder="Enter your email address" name="email"><br><br>
                
           
                
                
                    
                <input  id="place"  type="password" placeholder="Enter password" name="password"><br><br>
                
               
                             
                    
                <input style="color: white; background-color: #02BA6B;" id="place" type="submit" value="Login" name="login" />
                
                
            </form><br>

            <a id="place" href="registerForm.php" style="font-size: 15px; color: #02BA6B;text-decoration: none;">New Here, Sign Up Now</a> 

        </div>
         
    </center>

    <?php include("footer.html"); ?>
    </body>
</html>