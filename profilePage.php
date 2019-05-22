<?php
            session_start();

            include("flash-message.php");

            if($_SESSION['isLogIn']!='yes'){

                $_SESSION["message"]="Please Login";

                header("Location: LoginForm.php");
            }
            include 'dbConnect.php';
?>
<html>
    
    <head>
        
        <title>Profile</title>
        
        <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
        
    </head>
    
    <body>
          <?php include("navbar.html"); ?>
        
           
            <center>
            <div id="profile">

            <?php
                
                
                echo '<i><h3 id="place" style=" font-size:30px; color: white; background-color: #02BA6B; border: none;">'.$_SESSION['firstName']." ".$_SESSION['lastName'].'</h3></i>'; 
            ?> 


            <img id="pro-pic"  src="<?=$_SESSION['avatar']?>"><br>
            
            </div>

            <b><a id="place" href="logout.php" style="font-size: 15px; color: #02BA6B;text-decoration: none;">Log Out</a></b>

            </center><br>

        <b><p  style="border-radius: 5px; margin-left: 30px; margin-right: 30px; padding-top: 20px; padding-bottom: 20px; padding-left: 550px; font-size: 30px; background-color: #02BA6B;  color: white; border: 2.5px solid #007D4C;" >Adds Posted By You</p></b><br>
        
            <?php
            
              $getTitle="select * from advertisement where useremail='".$_SESSION['email']."'";
              
              
              $resultTitles=mysqli_query($mysqli,$getTitle)or die($mysqli->error);
              
              
              //$title=$resultTitles->fetch_assoc();
              //
              //
              //echo $title['addTitle'];
              
              
              $numRows= mysqli_num_rows($resultTitles);
              
             if($numRows!=0){ 
                 
             while($numRows>0){
                 
                 
                 while($row=mysqli_fetch_assoc($resultTitles)){


                    echo '<div style="border: 2.5px solid #02BA6B;">';
                   
                     echo '<h3 id="place" style=" font-size:30px; color: #02BA6B; background-color: white; border: none;">'."Title : ".$row['addTitle']." (".$row['postingTime'].")".'</h3>';

                      { ?>
                      <a id="place"  style="font-size: 15px; color: #02BA6B;text-decoration: none;" type="button" href="show-an-add.php?id=<?php echo $row["Id"];?>"> show</a>
		                  <a id="place"  style="font-size: 15px; color: #02BA6B;text-decoration: none;" type="button" href="addEditForm.php?id=<?php echo $row["Id"];?>"> Edit</a>
		                  <a id="place"   style="font-size: 15px; color: #02BA6B;text-decoration: none;" type="button" href="addDelete.php?id=<?php echo $row["Id"]; ?>"> Delete</a>
                      <br><br>
                      <?php }

                      echo '</div>'.'<br>';
                       
                }
                 
                 $numRows=$numRows-1;
              }
              
             }
             
             else{
                 
                 echo '<h3 id="place" style=" font-size:30px; color: #02BA6B; background-color: white; border: none;">'."No Add To Show".'</h3>';
                 
             }
             
            ?>
        

        <?php include("footer.html"); ?>
    </body>
    
</html>