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
           
            
        
      
        <i><h3 id="place" style=" font-size:30px; color: white; background-color: #02BA6B; border: none; margin-left: 500px; margin-right: 450px;"> Filtered Adds</h3></i>
        
            <?php
            
             
            
             include 'dbConnect.php';


            
             $city=$_SESSION['city'];
        
            //echo $city.'<br>';
        
            $area=$_SESSION['area'];
        
            //echo $area.'<br>';
        
            $serviceSector=$_SESSION['serviceSector'];
        
            //echo $serviceSector.'<br>';
        
            $serviceField=$_SESSION['serviceField'];
        
            //echo $serviceField;
             
            

            $getAllAddTitle="select * from advertisement where district='$city' and area='$area' and serviceCatagory='$serviceSector' and serviceField='$serviceField' order by postingTime";
              
              
              $resultTitles=mysqli_query($mysqli,$getAllAddTitle)or die($mysqli->error);
   
              $numRows= mysqli_num_rows($resultTitles);
              
             if($numRows!=0){ 
                 
             while($numRows>0){
                 
                 
                 while($row=mysqli_fetch_assoc($resultTitles)){
                     
                     echo '<div style="border: 2.5px dashed #02BA6B; margin-left: 30px; margin-right: 30px;">';
                   
                     echo '<h3 id="place" style=" font-size:30px; color: #02BA6B; background-color: white; border: none;">'.$row['addTitle']." [".$row['postingTime']."]".'</h3>';

                      { ?>
                      <a id="place" style="font-size: 15px; color: #02BA6B;text-decoration: none;" type="button" href="show-an-add.php?id=<?php echo $row["Id"];?>">Show Details</a>
                      <br><br><br>
                      <?php }

                      echo '</div>'.'<br>';
                       
                }
                 
                 $numRows=$numRows-1;
              }
              
             }
             
             else{
                 
                 echo '<div style="border: 2.5px dashed #02BA6B; margin-left: 30px; margin-right: 30px;">';
                   
                     echo '<h3 id="place" style=" font-size:30px; color: #02BA6B; background-color: white; border: none;">'."No Such Add Found!".'</h3>';

                      { ?>
                      <a id="place" style="font-size: 15px; color: #02BA6B;text-decoration: none;" type="button" href="addFilter.php">Apply Another Filter</a>
                      <br><br><br>
                      <?php }

                      echo '</div>'.'<br>';
                 
             }
             
            ?>
       
    </center>

    <i><h3 id="place" style=" font-size:30px; color: white; background-color: #02BA6B; border: none; margin-left: 500px; margin-right: 530px; padding-left: 10px;"> No More Adds To Show</h3></i>

    <?php include("footer.html"); ?>

    </body>
    
</html>