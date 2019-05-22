<?php
        
            session_start();
            
            include("flash-message.php");
        ?>
<!DOCTYPE html>
<html>

<head>

    <title>Filtered Adds</title>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>

    
</head>

    
    <body>
        
     <?php include("navbar.html"); ?>  
    
 <center>
           
            
        
      
        
        
            <?php
            
             if($_SERVER['REQUEST_METHOD']=='POST'){
            
             include 'dbConnect.php';
            
                      $_SESSION['city']=$mysqli->real_escape_string($_POST['slct1']);
        
            //echo $city.'<br>';
        
            $_SESSION['area']=$mysqli->real_escape_string($_POST['slct2']);
        
            //echo $area.'<br>';
        
            $_SESSION['serviceSector']=$mysqli->real_escape_string($_POST['slct3']);
        
            //echo $serviceSector.'<br>';
        
            $_SESSION['serviceField']=$mysqli->real_escape_string($_POST['slct4']);
        
            //echo $serviceField;
             
            if($_SESSION['area']==null||$_SESSION['city']==null||$_SESSION['serviceSector']==null||$_SESSION['serviceField']==null){

                $_SESSION["message"]="You Must Select All The Fields To Filter Adds!";
                header("Location: addFilter.php");

            } 

            header("Location: addFilterShowingTitle.php");


        }

            ?>

       
    </center>
    <?php include("footer.html"); ?>
    </body>
    
</html>