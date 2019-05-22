<?php
session_start();
if(!isset($_SESSION['isLogIn'])){
    
    $_SESSION["message"]= "you must log in to post an add.";
    
    header("Location: LoginForm.php");
    
    
}
else{
   
    if($_SERVER['REQUEST_METHOD']=='POST'){
        
        include 'dbConnect.php';
        $password=md5($_POST['password']);
   
        if($password==$_SESSION['password']){
        
        $title=$mysqli->real_escape_string($_POST['addTitle']);
        
        echo $title.'<br>';
        
        $description=$mysqli->real_escape_string($_POST['description']);
        
        echo $description.'<br>';
        
        $city=$mysqli->real_escape_string($_POST['slct1']);
        
        echo $city.'<br>';
        
        $area=$mysqli->real_escape_string($_POST['slct2']);
        
        echo $area.'<br>';
        
        $serviceSector=$mysqli->real_escape_string($_POST['slct3']);
        
        echo $serviceSector.'<br>';
        
        $serviceField=$mysqli->real_escape_string($_POST['slct4']);
        
        echo $serviceField;
        
        $address=$mysqli->real_escape_string($_POST['address']);
        
        $email=$_SESSION['email'];
        
        $insert="INSERT INTO `advertisement`(`useremail`,`serviceCatagory`, `serviceField`, `description`, `district`, `area`, `address`, `postingTime`, `addTitle`) VALUES ('".$email."','".$serviceSector."','".$serviceField."','".$description."','".$city."','".$area."','".$address."',NOW(),'".$title."')";
        
        
            if($mysqli->query($insert)){
                
               $_SESSION["message"]="Add added successfully."; 
               $_SESSION['addid']=$mysqli->insert_id;
               echo $_SESSION['addid'];
               
            }
             else{
                
                $_SESSION["message"]="Add Entry Failed";
                
               
                 header("Location: addEntry.php");
            }
            
            if(isset($_POST['mobile'])){
            
                
                $mobile=$mysqli->real_escape_string($_POST['mobile']);
                $addId=$_SESSION['addid'];
                $insertMobie="INSERT INTO addmobileno (`useremail`, `addId`, `mobileNo`) VALUES ('$email','$addId','$mobile')";
                if($mysqli->query($insertMobie)){
                    $_SESSION["message"]="Number added successfully";
                }
                else{
                    $_SESSION["message"]="Number 1 not added due to database error";
                    //header("Location: addEntry.php");
                }
            }
            
                if(isset($_POST['mobile1'])){
            
                
                $mobile2=$mysqli->real_escape_string($_POST['mobile1']);
                $addId=$_SESSION['addid'];
                $insertMobie="INSERT INTO addmobileno (`useremail`, `addId`, `mobileNo`) VALUES ('$email','$addId','$mobile2')";
                if($mysqli->query($insertMobie)){
                    $_SESSION["message"]="Number added successfully";
                }
                else{
                    $_SESSION["message"]="Number 2 not added due to database error";
                    //header("Location: addEntry.php");
                }
            }
            $_SESSION["message"]="Add posted successfully";
            header("Location: profilePage.php");
        }
        else{
            $_SESSION["message"]='Password did not matched.';
            header("Location: LoginForm.php");
        }
    }

}
?>

