<?php
            session_start();
            include("flash-message.php");

            if(!isset($_SESSION['isLogIn'])){
                
                $_SESSION["message"]= "you must log in to post an add.";
                
                header("Location: LoginForm.php");
                
            }
        ?> 
<html>
    <head>
        <title>
        Post a new add </title>
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        
        
    </head>
    
    <body>
        
       <?php include("navbar.html"); ?>
        

       

        <div class="addForm">
            
            <b><p  style="font-size: 35px; color: #02BA6B; border: 2.5px dashed #02BA6B; margin-right: 1050px; padding-left: 10px; padding-top: 20px; padding-bottom: 20px;" >Post A New Add </p></b>

            <form action="addRegister.php" method="POST" enctype="multipart/form-data">

                
                <b><p style= "font-size: 23px; color: #02BA6B">Give Your Add a Title:</p></b>

                <input style="font-size: 18px;"  id="place" type="text" name="addTitle" required><br>
                
                <b><p style= "font-size: 23px; color: #02BA6B">Choose your city:</p></b>
                
                <select style="font-size: 18px;" id="slct1" name="slct1" onchange="populate(this.id,'slct2')" required>
                    
                <option value=""></option>
                
                <option value="Dhaka">Dhaka</option>
                
                <option value="Chittagong">Chittagong</option>
                
                <option value="Sylhet">Sylhet</option>
                
                
                </select>
                
                <br>
                
                <b><p style= "font-size: 23px; color: #02BA6B">Choose your Area:</p></b>
                
                <select style="font-size: 18px;" id="slct2" name="slct2" value="slct2"></select>
                
                <br>
                
                <b><p style= "font-size: 23px; color: #02BA6B">Enter Your Address:</p></b>
                
                <input id="place" type="text" name="address">
                
                <br>
                
                <b><p style= "font-size: 23px; color: #02BA6B">Choose Service:</p></b>
                
                <select id="slct3" name="slct3" onchange="populate2(this.id,'slct4')" required>
                    
                <option value=""></option>
                
                <option value="IT">IT</option>
                
                <option value="Tuition">Tuition</option>
                
                <option value="Health">Health</option>
                
                <option value="Repair">Repair</option>
                
                </select>
                
                <br>
                
                <b><p style= "font-size: 23px; color: #02BA6B">Choose Sector:</p></b>
                
                <select id="slct4" name="slct4" value="slct4"></select>
                
                <br>
                <b><p style= "font-size: 23px; color: #02BA6B">Describe Your Service:</p></b>
                
                <input style="font-size: 17px; width: 500px; height: 300px;" id="place" name="description" type="text" reqired><br>
                
                <b><p style= "font-size: 23px; color: #02BA6B">Mobile Number:</p></b>
                
                <input id="place" name="mobile" type="text" reqired><br><br>

                 <input id="place" name="mobile1" type="text" reqired><br>
                
                <br>
                
                <b><p style= "font-size: 23px; color: #02BA6B">Enter Your Password To Confirm:</p></b>
                
                <input id="place" type="password" name="password" required><br><br>
                
                <input id="place" style="background-color:  #02BA6B; color: white; " type="submit" value="Post Your Add" />
                
                
            </form> 

        </div><br><br>
    
        <?php include("footer.html"); ?>
        <script src="assets/js/script.js" type="text/javascript"></script>
    </body>
</html>

