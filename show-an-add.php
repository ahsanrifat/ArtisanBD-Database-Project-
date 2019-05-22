<?php
        
            session_start();
            $id = $_REQUEST["id"];
            
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
           
            
        
      
        <i><h3 id="place" style=" font-size:30px; color: white; background-color: #02BA6B; border: none; margin-left: 500px; margin-right: 450px;">Details About This Add</h3></i>
        
            <?php
            
             
            
             include 'dbConnect.php';



            $getAllAddTitle="select *  from advertisement where ID='".$id."'";
              
              
              $resultTitles=mysqli_query($mysqli,$getAllAddTitle)or die($mysqli->error);
   
              $numRows= mysqli_num_rows($resultTitles);
              
             if($numRows!=0){ 
                 
             while($numRows>0){
                 
                 
                 while($row=mysqli_fetch_assoc($resultTitles)){
                     
                     echo '<div style="border: 2.5px dashed #02BA6B; margin-left: 30px; margin-right: 30px; font-size:25px;
                     color: #02BA6B; " >';
                   
                     echo '<h3 id="place" style=" font-size:30px; color: #02BA6B; background-color: white; border: none;">'.$row['addTitle']." [".$row['postingTime']."]".'</h3>';


                     $sql="select *  from userinfo where emailid='".$row['useremail']."'";

                     $result= mysqli_query($mysqli,$sql);

                     while($row1= mysqli_fetch_array($result)){

                        echo "<u><h3>".$row1['firstName']." ".$row1['lastName'].'</h3></u>'.'<br>'.'<br>';

                     }


                     $sql2="select *  from addmobileno where useremail='".$row['useremail']."' and addId='".$id."'";

                     $result2= mysqli_query($mysqli,$sql2);

                     echo '<div style=" text-align: left; margin-left: 300px; margin-right: 300px;">';

                    echo "<b><u>Contact No:</b></u> ".'<br>';  

                     while($row2= mysqli_fetch_array($result2)){

                        echo $row2['mobileNo'].'<br>';

                     }
                     echo '<br>';
                     echo "<b><u>Email:</b></u> ".$row['useremail'].'<br>'.'<br>';
                     echo "<b><u>District:</b></u> ".$row['district'].'<br>'.'<br>';
                     echo "<b><u>Area:</b></u> ".$row['area'].'<br>'.'<br>';
                     echo "<b><u>Service Catagory:</b></u> ".$row['serviceCatagory'].'<br>'.'<br>';
                     echo "<b><u>Service Field:</b></u> ".$row['serviceField'].'<br>'.'<br>';
                     echo "<b><u>Description:</b></u> ".'<br>'.$row['description'].'<br>'.'<br>'.'<br>';

                     echo '</div>';

                    

                      { ?>
                      <a id="place" style="font-size: 15px; color: #02BA6B;text-decoration: none;" type="button" href="show-a-profile.php?id=<?php echo $row["useremail"];?>">View Profile</a>
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


    <?php include("footer.html"); ?>

    </body>
    
</html>