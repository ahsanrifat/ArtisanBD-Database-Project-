<?php
            session_start();

            include("flash-message.php");


            if(!(isset($_SESSION['pemail']))){

            $_SESSION['pemail'] = $_REQUEST["id"];

        	}

          

        	$email=$_SESSION['pemail'];

            

            include 'dbConnect.php';

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
           
            
        
      
        <i><h3 id="place" style=" font-size:30px; color: white; background-color: #02BA6B; border: none; margin-left: 500px; margin-right: 450px;">Details About This Profile</h3></i>
        

        	<center>
            <div id="profile">


            <?php

            $sql="select * from userinfo where emailId='".$email."'";

            $result=mysqli_query($mysqli,$sql);

            while ($row=mysqli_fetch_array($result)){

            	$firstName= $row['firstName'];
            	$lastName= $row['lastName'];
            	$avatar= $row['proPic'];
            	$gender=$row['gender'];
            


             echo '<i><h3 id="place" style=" font-size:30px; color: white; background-color: #02BA6B; border: none;">'.$firstName." ".$lastName." (".$gender.')</h3></i><br>';




            

             echo '<img id="pro-pic"  src="'.$avatar.'"><br>';

             }
            
              ?>

            </div>

            </center><br>
        <b><p  style="border-radius: 5px; margin-left: 300px; margin-right: 300px; padding-top: 20px; padding-bottom: 20px; padding-left: 10px; font-size: 30px; background-color: #02BA6B;  color: white; border: 2.5px solid #007D4C;" >Anonymous Comments On This Profile</p></b><br>
              

            
       
    </center>


    <?php

    	 $sql2="select * from comment where emailId='".$email."'";

    	 $result2=mysqli_query($mysqli,$sql2);

    	 while($row2=mysqli_fetch_array($result2)){

    	 	echo '<div style="border: 2.5px solid #02BA6B; margin-bottom: 15px;">';

    	 	 echo '<h3 id="place" style=" font-size:30px; color: #02BA6B; background-color: white; border: none;">'.$row2['comment'].'</h3>';

    	 	 echo '</div>';
    	 }

    	 if($result2->num_rows==0){

    	 	echo '<div style="border: 2.5px solid #02BA6B; margin-bottom: 15px;">';

    	 	echo '<h3 id="place" style=" font-size:30px; color: #02BA6B; background-color: white; border: none;">'."No Comments To Show".'</h3>';

    	 	echo '</div>';
    	 }

    	 
    ?><br>


    <b><p  style="border-radius: 5px; margin-left: 300px; margin-right: 300px; padding-top: 20px; padding-bottom: 20px; padding-left: 200px; font-size: 30px; background-color: #02BA6B;  color: white; border: 2.5px solid #007D4C;" >Drop Your Won Comment</p></b><br><br>


    <form action="place-comment.php" method="POST" enctype="multipart/form-data"">

		<div style="border: 2.5px solid #02BA6B; margin-bottom: 15px;">

			<input type="texr" name="comment" id="place" style=" font-size:30px; color: #02BA6B;

             background-color: white; border: none; width: 98.5%; height: 80px;">

			</div>	

			<input type="hidden"  name="email" value="<?=$email?>">


			<input type="submit" value="Comment" id="place"  style= "font-size: 15px; color: #02BA6B;"/>


		</div>


		</form><br>


    <?php include("footer.html"); ?>

    </body>
    
</html>