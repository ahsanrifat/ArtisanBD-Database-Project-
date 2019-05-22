<?php
            session_start();
           include("flash-message.php");
            
            ?>
<!DOCTYPE html>
<html>

<head>
    
</head>

    <title>Filter Add</title>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>    
<body>
        
    <?php include("navbar.html"); ?> 

    <i><h3 id="place" style=" font-size:30px; color: white; background-color: #02BA6B; border: none; margin-left: 500px; margin-right: 450px;"> Find Exactly What You Need</h3></i>
    
 <center>
            <div id="add-filter-form">
        
        <form action="addFilterShowing.php" method="POST" enctype="multipart/form-data"> 
        
        
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
                
                <br><br>
                
                <input id="place" style="background-color:  #02BA6B; color: white; "type="submit" value="Search" />
       
          </form><br><br><br>   

      </div>

          <?php include("footer.html"); ?>     
          <script src="assets/js/script.js" type="text/javascript"></script>
               
    </body>
    
</html>



